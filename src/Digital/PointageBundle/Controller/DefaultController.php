<?php

namespace Digital\PointageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PointageBundle:Default:login.html.twig', array('name' => $name));
    }
}
