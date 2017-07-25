<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ClientesControllerTest extends WebTestCase
{
    public function testRegistrar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/clientes/registrar');
    }

    public function testBoraar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/clientes/borrar');
    }

}
