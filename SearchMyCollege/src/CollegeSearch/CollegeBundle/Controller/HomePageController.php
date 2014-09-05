<?php
// src/CollegeSearch/CollegeBundle/Controller/HomePageController.php

namespace CollegeSearch\CollegeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CollegeSearch\CollegeBundle\Entity\contactForm;
use CollegeSearch\CollegeBundle\Form\contactFormType;

class HomePageController extends Controller
{
	public function indexAction()
	{
		return $this->render('CollegeSearchCollegeBundle:HomePage:index.html.twig');
	}
	
	public function aboutAction()
	{
		return $this->render('CollegeSearchCollegeBundle:HomePage:about.html.twig');
	}
	
	public function contactAction()
	{
		$contact = new contactForm();
		$form = $this->createForm(new contactFormType(), $contact);
		
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
		
			if ($form->isValid()) {
				$message = \Swift_Message::newInstance()
				->setSubject('Contact enquiry from srchMyColl')
				->setFrom('enquiries@symblog.co.uk')
				->setTo($this->container->getParameter('CollegeSearch_College.emails.contact_email'))
				->setBody($this->renderView('CollegeSearchCollegeBundle:HomePage:contactEmail.txt.twig', array('contact' => $contact)));
				$this->get('mailer')->send($message);
				
				$this->get('session')->getFlashBag()->add('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');
				
				return $this->redirect($this->generateUrl('college_search_college_contactpage'));
			}
		}
		return $this->render('CollegeSearchCollegeBundle:HomePage:contact.html.twig', array(
        'form' => $form->createView()));
	}
}