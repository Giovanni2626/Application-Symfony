<?php

namespace App\DataFixtures;

use App\Entity\Formation;
use App\Entity\User; 
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setUsername('admin');
        $password = $this->hasher->hashPassword($user, 'Giovanni2602');
        $user->setPassword($password);
        $user->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);

        $f1 = new Formation();
        $f1->setTitle("Aide à la connexion");
        $f1->setPublishedAt(new \DateTime("2023-01-01"));
        $f1->setDescription("Une description pour le test");
        $manager->persist($f1);

        $f2 = new Formation();
        $f2->setTitle("Apprendre Java");
        $f2->setPublishedAt(new \DateTime("2023-02-01"));
        $f2->setDescription("Une autre description");
        $manager->persist($f2);
        $manager->flush();
    }
}