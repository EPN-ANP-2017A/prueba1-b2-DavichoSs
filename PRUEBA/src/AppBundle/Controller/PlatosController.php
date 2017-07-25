<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PlatosController extends Controller
{
    /**
     * @Route("/platos/registrar")
     */
    public function registrarAction()
    {
        return $this->render('AppBundle:Platos:registrar.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/platos/borrar")
     */
    public function borrarAction()
    {
        return $this->render('AppBundle:Platos:borrar.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/platos/ver")
     */
    public function verAction()
    {
        return $this->render('AppBundle:Platos:ver.html.twig', array(
            // ...
        ));
    }

}
