<?php

namespace RentBikeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RentBikeBundle:Default:index.html.twig');
    }
}
