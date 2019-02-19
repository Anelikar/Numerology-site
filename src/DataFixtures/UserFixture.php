<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;

use Symfony\Component\Security\Core\Encoder\Argon2iPasswordEncoder;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $passwordEncoder = new Argon2iPasswordEncoder();

        $user = new User();
        $user->setEmail('TBC2.0@yandex.ru');
        $user->setPassword($passwordEncoder->encodePassword('qwerty', ''));
        $manager->persist($user);

        $manager->flush();
    }
}
