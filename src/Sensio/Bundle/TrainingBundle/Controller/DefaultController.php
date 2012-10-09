<?php

namespace Sensio\Bundle\TrainingBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}", name="greeting")
     * @Template()
     */
    public function indexAction(Request $request, $name)
    {
        $request->getSession()->set("username", $name);
        $response = $this->redirect($this->generateUrl('hello'));

        return $response;
    }

    /**
     * @Route("/hello", name="hello")
     * @Template()
     */
    public function helloAction(Request $request)
    {
    	if (! $request->getSession()->get('username')) {
    		throw  $this->createNotFoundException();
    	}

        return array('name' => $request->getSession()->get('username'));
    }

    /**
    * @Template("SensioTrainingBundle:Default:time.html.twig")
    */
    public function timeAction()
    {
    	return array('time' => date("Y-m-d H:i:s"));
    }
}
