<?php

namespace ISIPOPPHP\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ISIPOPPHPmainBundle:Default:index.html.twig', array('name' => $name));
    }
}
