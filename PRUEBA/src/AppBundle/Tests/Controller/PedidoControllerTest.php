<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PedidoControllerTest extends WebTestCase
{
    public function testRegistrar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/pedido/registrar');
    }

    public function testBorrar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/pedido/borrar');
    }

}
