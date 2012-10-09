<?php

namespace Sensio\Bundle\TrainingBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}", defaults={"name"="Barry"})
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    public function timeAction()
    {
    	$template = 'SensioTrainingBundle:Default:time.html.twig';
    	return $this->render($template, array('time' => date("Y-m-d H:i:s")));
    }
}
