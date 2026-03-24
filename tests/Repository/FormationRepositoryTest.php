<?php
namespace App\tests\Repository;

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
    public function testFindAllOrderBy(): void
    {
        self::bootKernel();
        $repository = static::getContainer()->get(FormationRepository::class);
        
        
        $formations = $repository->findAllOrderBy('title', 'ASC');
        $this->assertGreaterThanOrEqual(2, count($formations));
        
        $this->assertLessThanOrEqual($formations[1]->getTitle(), $formations[0]->getTitle());
    }

    public function testFindAllLasted(): void
    {
        self::bootKernel();
        $repository = static::getContainer()->get(FormationRepository::class);
        
        
        $formations = $repository->findAllLasted(2);
        $this->assertCount(2, $formations);
    }
}