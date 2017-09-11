<?php

namespace RentBikeBundle\Repository;


use Doctrine\ORM\EntityRepository;

class ClientRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        // return $this->getEntityManager()
        //     ->createQuery(
        //         'SELECT p FROM RentBikeBundle:Client p'
        //     )
        //     ->getArrayResult();


        $query = $this->createQueryBuilder('c')
		->select('c.id, c.fullname,c.identificationNumber, i.content')
		->innerJoin('c.identificationType', 'i');
				
		$query = $query->getQuery();
		$result = $query->getArrayResult();

		// $data = array();

		// foreach ($result as $key => $r) {
		// 	$d = array();
		// 	$d['fullname'] = $r[]
		// }

		return $result;

    }
}
