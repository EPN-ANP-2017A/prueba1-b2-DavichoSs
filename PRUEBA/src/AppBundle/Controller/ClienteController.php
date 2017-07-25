<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ClienteController extends Controller
{
    /**
     * @Route("/cliente/registrar")
     */
    public function registrarAction()
    {
        return $this->render('AppBundle:Cliente:registrar.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/cliente/ver")
     */
    public function verAction()
    {
        return $this->render('AppBundle:Cliente:ver.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/cliente/borrar")
     */
    public function borrarAction()
    {
        return $this->render('AppBundle:Cliente:borrar.html.twig', array(
            // ...
        ));
    }

}
