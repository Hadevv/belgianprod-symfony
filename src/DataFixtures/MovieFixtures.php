<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Movie;


class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $data = [
            [
                'title' => 'The Shawshank Redemption',
            ],
        ];

        foreach($data as $row) {
            $movie = new Movie();
            $movie->setTitle($row['title']);

            $manager->persist($movie);
        }

        $manager->flush();
    }
}
