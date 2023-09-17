<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $actor = new Actor();
       $actor->setName("Chritian Bale");
       $manager->persist($actor);

       $actor2 = new Actor();
       $actor2->setName("Health Ledger");
       $manager->persist($actor2);

        $manager->flush();

        $this->addReference('actor_1', $actor);
        $this->addReference('actor_2', $actor);

    }
}
