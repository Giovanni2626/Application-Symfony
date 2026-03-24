<?php
namespace App\tests\Security;

use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginTest extends WebTestCase
{
    public function testLoginSuccess(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

        $button = $crawler->selectButton('Sign in');
        $form = $button->form();

        $client->submit($form, [
            'username' => 'admin',
            'password' => 'Giovanni2602',
        ]);

        $this->assertResponseRedirects();

        $client->followRedirect();

        $this->assertResponseIsSuccessful();

        $this->assertStringContainsString('/formations', $client->getRequest()->getUri());
    }

public function testFindByTitle(): void
{
    self::bootKernel();
    $repository = static::getContainer()->get(FormationRepository::class);
    
   
    $formations = $repository->findByContainValue('title', 'Java');
    
    $this->assertGreaterThanOrEqual(0, count($formations));
}
}