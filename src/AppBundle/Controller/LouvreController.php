<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customer;
use AppBundle\Entity\Visit;
use AppBundle\Form\CustomerType;
use AppBundle\Form\VisitStep1Type;
use AppBundle\Form\VisitStep2Type;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class LouvreController extends Controller
{

    public function indexAction(Request $request)
    {

        return $this->render('AppBundle:Louvre:booking.html.twig');

    }

    public function addCustomerAction(Request $request, SessionInterface $session)
    {
        var_dump($session);
        $visit = new Visit();
        $form = $this->get('form.factory')->create(VisitStep1Type::class, $visit);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid())
        {
            $session->set('visit', $visit);
            return $this->redirectToRoute('app_visitedate');
        }
        return $this->render('AppBundle:Louvre:booking.html.twig', array('form' => $form->createView()));
    }

    public function visitStep2Action(Request $request, SessionInterface $session)
    {
        $visit = $session->get('visit');
        $form = $this->get('form.factory')->create(VisitStep2Type::class, $visit);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $session->set('visit', $visit);
            return $this->redirectToRoute('app_tickets');
        }
        return $this->render('AppBundle:Louvre:visitDate.html.twig', array('form' => $form->createView()));
    }

    public function visitStep3Action(Request $request, SessionInterface $session)
    {
        $visit = $session->get('visit');
        $form = $this->get('form.factory')->create(VisitStep2Type::class, $visit);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $session->set('visit', $visit);
            return $this->redirectToRoute('app_visitedate', array('id'=>$visit->getCustomer()));
        }
    }
}
