<?php
namespace App\Tests\Repository;

use App\Entity\Formation;
use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class FormationRepositoryTest extends KernelTestCase
{
    public function testFindByTitle(): void
    {
        self::bootKernel();
        $repository = static::getContainer()->get(FormationRepository::class);
        
        $formations = $repository->findAllByTitle("Java");
        
        $this->assertCount(1, $formations);
        $this->assertEquals("Apprendre Java", $formations[0]->getTitle());
    }
}