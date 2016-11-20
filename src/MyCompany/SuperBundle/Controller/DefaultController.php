<?php

namespace MyCompany\SuperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyCompanySuperBundle:Default:index.html.twig');
    }
}
