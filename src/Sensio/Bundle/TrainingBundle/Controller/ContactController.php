<?php

namespace Sensio\Bundle\TrainingBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\TrainingBundle\Contact\ContactType;
use Sensio\Bundle\TrainingBundle\Contact\Contact;

class ContactController extends Controller
{
    /**
     * @Route("/contact" ,name="contact")
     * @Template()
     */
    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(new ContactType(),$contact);
        
        if($request->getMethod() === 'POST') {
            $form->bindRequest($request);

            if($form->isValid()) {
                $contact->send('a.b.barrysoft@gmail.com');
                
                return $this->redirect($this->generateUrl('success'));
            }
        }

        return  array('form' => $form->createView());
    }

    /**
     * @Route("/success" ,name="success")
     * @Template()
     */
    public function successAction(Request $request)
    {
        return new Response('Votre Formulaire à bien été envoyé');
    }
}
