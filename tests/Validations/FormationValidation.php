<?php

namespace App\tests\Validations;

use App\Entity\Formation;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class FormationValidationTest extends KernelTestCase
{
    private function getValidator(): ValidatorInterface
    {
        self::bootKernel();
        return static::getContainer()->get('validator');
    }

    public function testValidDate(): void
    {
        $validator = $this->getValidator();
        $formation = (new Formation())
            ->setTitle("Formation Test")
            ->setPublishedAt(new \DateTime("yesterday")); 

        $errors = $validator->validate($formation);
        $this->assertCount(0, $errors, "Une date passée devrait être valide");
    }

    public function testInvalidFutureDate(): void
    {
        $validator = $this->getValidator();
        $formation = (new Formation())
            ->setTitle("Formation Futur")
            ->setPublishedAt(new \DateTime("+1 day"));

        $errors = $validator->validate($formation);
        
        $this->assertGreaterThan(0, count($errors), "La date de demain devrait être refusée");
    }
}