<?php

namespace Digital\PointageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
    	$var = $this->getRequest()->query->get('login');
        //return $this->render('PointageBundle:Operation:pointer.html.twig',array('login' => $var ));
        return $this->render('PointageBundle:Default:index.html.twig',array('login' => $var ));
    }
    
}
