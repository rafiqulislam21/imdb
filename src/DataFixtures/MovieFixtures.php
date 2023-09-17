<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle("The Dark night");
        $movie->setReleaseYear(2008);
        $movie->setDescription("This is the description of the Dark night");
        $movie->setImagePath("https://www.studienscheiss.de/wp-content/uploads/2015/11/Studienscheiss_Blog32-11-Dinge-die-du-von-Batman-uebers-Studieren-lernen-kannst.jpg.webp");
        // add data to pivoit table
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));

        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle("Avangers");
        $movie2->setReleaseYear(2019);
        $movie2->setDescription("This is the description of the Avangers");
        $movie2->setImagePath("https://images.thequint.com/thequint%2F2019-04%2F0c94de9a-d5ac-40c2-816f-ef0eeb7d09a0%2Favengers_poster2.jpg?rect=0%2C0%2C1280%2C720&auto=format%2Ccompress&fmt=webp&width=720");
        
        // add data to pivoit table
        $movie2->addActor($this->getReference('actor_1'));

        $manager->persist($movie2);
        
        $manager->flush();
    }
}
