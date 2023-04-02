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
        $movie->setTitle('The Dark Knight');
        $movie->setReleaseYear(2008);
        $movie->setDescription('This is the description for the dark knight');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2018/08/23/17/01/batman-3626211_960_720.jpg');

        // Add date to pivot table
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Hulk');
        $movie2->setReleaseYear(2019);
        $movie2->setDescription('This is the description for the Avengers');
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2019/12/15/23/29/hulk-4698161_960_720.jpg');

        // Add date to pivot table
        $movie->addActor($this->getReference('actor_3'));
        $movie->addActor($this->getReference('actor_4'));
        $manager->persist($movie2);

        $manager->flush();
    }
}
