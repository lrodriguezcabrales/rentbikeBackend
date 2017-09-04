<?php

namespace RentBikeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use RentBikeBundle\Entity\User;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('RentBikeBundle:Default:index.html.twig');
    }

    public function resolveRouteAction(Request $request)
    {
        $method = $request->getMethod();

        switch($method)
        {
            case 'GET':
                $id = $request->get('id');
                if(!is_null($id)){
                    return $this->getOneAction($id);
                }
                return $this->listAction();
                break;
            case 'POST':
                $contentType = $request->headers->get('content_type');
                $explode = explode(";", $contentType);
                $contentType = $explode[0];
                $action = $request->headers->get('X-ACCION');
                if($action){
                    if($contentType == 'multipart/form-data'){
                        $id = $request->get('id');
                        if($action == 'update'){
                            return $this->updateAction($id);
                        }
                    }
                }else{
                    return $this->saveAction();
                }
                break;
            case 'PUT':
                return $this->updateAction();
                break;
            case "DELETE":
                return $this->deleteAction();
                break;
        }
    }

    /**
     * Listar Usuarios
     */
    public function listAction() 
	{
		$em = $this->get("doctrine")->getManager();

		$query = $em->createQuery('SELECT u FROM RentBikeBundle:User u');

        $data = $query->getArrayResult();   

		return new JsonResponse(array('total' => count($data), 'data' => $data));

	}

    public function getOneAction($id = null) 
    {
        $em = $this->get("doctrine")->getManager();

        if(!is_null($id)){
            $query = $em->createQuery("SELECT u FROM RentBikeBundle:User u
                WHERE u.id='".$id."'");
        }

        $data = $query->getArrayResult();   

        return new JsonResponse($data[0]);

    }


    /**
	 * Guardar un usuario 
	 */
	public function saveAction()
	{
		$em = $this->get("doctrine")->getManager();

		$request = $this->container->get('request_stack')->getCurrentRequest();
		$response = null;

        //$request = $this->get('request');

        //Obtenemos los datos que nos envia el cliente
        $data = $request->getContent();
        $data = json_decode($data, true);

        $userSearch = $em->getRepository('RentBikeBundle:User')->findOneBy(array('email'=>$data['email']));

        if($userSearch){
           	$response = array('status'=> 200, 'msj' =>'Ya existe un usuario registrado con este email');
        }
	
        if(count($data) > 0){
        	
        	$user = new User();

        	$user->setEmail($data['email']);
        	$user->setPassword($data['password']);
        	$user->setFirstname($data['firstname']);
        	$user->setLastname($data['lastname']);
        	$user->setSecondname($data['secondname']);
        	$user->setSecondlastname($data['secondlastname']);
        		
        	//$user->setType($data['type']);

        	$em->persist($user);
        	$em->flush();

        }

        $userSearch = $em->getRepository('RentBikeBundle:User')->findOneBy(array('email'=>$data['email']));

        if($userSearch){
            
            $response = array('status'=> 200, 'msj' =>'Usuario creado exitosamente');
            
            return new JsonResponse($response);

        }else{
            //$response = array('status'=> 500, 'msj' =>'Ha ocurrido un error');
            throw $this->createNotFoundException('Error al crear el usuario');
        }

        
	}

    /**
     * Actualizar un usuario 
     */
    public function updateAction($id)
    {
        $em = $this->get("doctrine")->getManager();

        $request = $this->container->get('request_stack')->getCurrentRequest();
        $response = null;

        //Obtenemos los datos que nos envia el cliente
        $data = $request->getContent();
        $data = json_decode($data, true);

        $userSearch = $em->getRepository('RentBikeBundle:User')->find($id);

        if($userSearch){
           
            if(count($data) > 0){
            

                $userSearch->setEmail($data['email']);
                $userSearch->setPassword($data['password']);
                $userSearch->setFirstname($data['firstname']);
                $userSearch->setLastname($data['lastname']);
                $userSearch->setSecondname($data['secondname']);
                $userSearch->setSecondlastname($data['secondlastname']);
                    
                $em->flush($userSearch);

            }

        }

        $response = array('status'=> 200, 'msj' =>'Usuario actualizado');
        
        return new JsonResponse($response);
        
    }
}
