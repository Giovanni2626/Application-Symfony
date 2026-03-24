<?php
namespace App\tests\Unit;

use App\Entity\Formation;
use PHPUnit\Framework\TestCase;

class FormationTest extends TestCase
{
    public function testGetPublishedAtString(): void
    {
        $formation = new Formation();
        $date = new \DateTime("2023-10-25");
        $formation->setPublishedAt($date);

       
        $this->assertEquals("25/10/2023", $formation->getPublishedAtString());
    }

    public function testGetPublishedAtStringEmpty(): void
    {
        $formation = new Formation();
        $this->assertEquals("", $formation->getPublishedAtString());
    }
}