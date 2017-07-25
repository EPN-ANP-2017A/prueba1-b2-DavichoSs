<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PedidoController extends Controller
{
    /**
     * @Route("/pedido/registrar")
     */
    public function registrarAction()
    {
        return $this->render('AppBundle:Pedido:registrar.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/pedido/borrar")
     */
    public function borrarAction()
    {
        return $this->render('AppBundle:Pedido:borrar.html.twig', array(
            // ...
        ));
    }

}
