<?php

namespace ZanimauxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZanimauxBundle:Default:index.html.twig');
    }
}
