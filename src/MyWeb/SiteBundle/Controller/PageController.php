<?php
// src/MyWeb/SiteBundle/Controller/PageController.php

namespace MyWeb\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use MyWeb\SiteBundle\Entity\Enquiry;
use MyWeb\SiteBundle\Form\EnquiryType;
use Symfony\Component\HttpFoundation\Response;
//use Doctrine\Common\Persistence\ObjectManager;
//use Doctrine\Common\DataFixtures\AbstractFixture;
//use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class PageController extends Controller
{
    public function indexAction(/*Request $req*/)
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject('Message from My Web Site.')
                    ->setFrom('oscar.panczenko.web@gmail.com')
                    ->setTo($this->container->getParameter('myweb_site.emails.contact_email'))
                    ->setBody($this->renderView('MyWebSiteBundle:Page:contactEmail.txt.twig', array('enquiry' => $enquiry)));
                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag()->add('contact-notice', 'Your message was successfully sent. Thank you!');

                $em = $this->getDoctrine()->getManager();
                $em->persist($enquiry);
                $em->flush();

                return $this->redirect($this->generateUrl('my_web_site_homepage'));
            }
        }

        return $this->render('MyWebSiteBundle:Page:index.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function loginAction(Request $request)
    {
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render(
            'MyWebSiteBundle:Page:login.html.twig',
            array(
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
            )
        );
    }

    public function adminAction()
    {
        $paginator = $this->get('knp_paginator');

        $enquiryQuery = $this->getDoctrine()->getRepository('MyWebSiteBundle:Enquiry')->searchForEmail('');

        $enquiry = $paginator->paginate($enquiryQuery, 1, 5);

        return $this->render('MyWebSiteBundle:Page:admin.html.twig', array('enquiry' =>  $enquiry));
    }

    public function searchAction()
    {
        $paginator = $this->get('knp_paginator');

        $page = $this->getRequest()->get('page', 1);
        $keyword = $this->getRequest()->get('keywords');

        $enquiryQuery = $this->getDoctrine()->getRepository('MyWebSiteBundle:Enquiry')->searchForEmail($keyword);

        $enquiry = $paginator->paginate($enquiryQuery, $page, 5);

        return $this->render('MyWebSiteBundle:Page:search.html.twig', array('enquiry' =>  $enquiry));
    }
}

//<a href="{{ path('ens_job_show', { 'id': entity.id }) }}">show</a>

