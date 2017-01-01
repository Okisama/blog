<?php

namespace Rokka\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RokkaBlogBundle:Default:index.html.twig');
    }

    public function categoryAction($category)
    {

    }

    public function postAction($post, $category)
    {

    }
}
