<?php

namespace App\Tests\Controller;

use App\Form\RegistrationType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SuscripcionFormTest extends WebTestCase
{


    public function testPublicacionNew()
    {
        $client = static::createClient();



        $crawler=$client->request('GET', '/suscripcion/new');
        $form = $crawler->selectButton('save');
        

        $crawler = $client->submitForm('submit', [
            'SuscripcionTypeForm[tipoPublicacion]' =>('Libro'),
            'SuscripcionTypeForm[usuario]' =>('gastoncumoll@hotmail.com'),
        ]);


        // submit the Form object
        $crawler = $client->submit($form);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertSelectorTextContains('h1', 'Register');
    }
    
}