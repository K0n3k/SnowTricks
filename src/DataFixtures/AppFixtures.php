<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class AppFixtures extends Fixture
{
    private const NB_USERS = 5;
    private const NB_TRICKS = 5;
    private const GROUPS = ['grabs', 'rotations', 'flips', 'slides', 'jumps'];
    private const NB_COMMENTARIES = 3;

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);


        $user = new User();
        $manager->flush();
    }
}
