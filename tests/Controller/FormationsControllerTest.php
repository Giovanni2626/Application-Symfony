<?php

namespace App\tests\Controller; 
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FormationsControllerTest extends WebTestCase
{
    public function testPageFormationsUp(): void
    {
        $client = static::createClient();
        $client->request('GET', '/formations');
        $this->assertResponseIsSuccessful();
    }

    public function testTriFormation(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/formations');

        $button = $crawler->selectButton('sort_title_asc');
        
        if ($button->count() > 0) {
            $form = $button->form();
            $crawler = $client->submit($form);
            
            $this->assertGreaterThan(0, $crawler->filter('table tbody tr')->count());
            
            $this->assertSelectorTextContains('table tbody tr:nth-child(1) h5', 'Aide à la connexion');
        } else {
            $this->markTestSkipped('Bouton de tri non trouvé.');
        }
    }


    public function testFiltreFormation(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/formations');

        $button = $crawler->filter('th')->first()->selectButton('filtrer');
        
        $form = $button->form([
            'recherche' => 'Java' 
        ]);
        
        $crawler = $client->submit($form);

        $this->assertSelectorTextContains('table tbody', 'Java');
    }
}