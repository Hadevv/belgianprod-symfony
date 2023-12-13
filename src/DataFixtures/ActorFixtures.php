<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Actor;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $data = [
            [
                "firstname" => "Bob",
                "lastname" => "Bob",
                "birthday" => "1977-09-20",
                "gender" => "m",
            ],
            [
                "firstname" => "Clara",
                "lastname" => "Smills",
                "birthday" => "1985-06-12",
                "gender" => "f",
            ],
        ];

        foreach($data as $row) {
            $actor = new Actor();
            $actor->setFirstname($row['firstname']);
            $actor->setLastname($row['lastname']);
            $actor->setBirthday(new \DateTime($row['birthday']));
            $actor->setGender($row['gender']);

            $manager->persist($actor);
        }

        $manager->flush();
    }
}