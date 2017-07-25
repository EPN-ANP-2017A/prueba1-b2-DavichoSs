<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ClienteControllerTest extends WebTestCase
{
    public function testRegistrar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cliente/registrar');
    }

    public function testVer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cliente/ver');
    }

    public function testBorrar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cliente/borrar');
    }

}
