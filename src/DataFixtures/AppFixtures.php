<?php

namespace App\DataFixtures;

use App\Entity\Log;
use App\Entity\Logs;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $faker = Faker\Factory::create('fr_FR');

        $logsArray = [];

        for ($i = 0; $i < 10; $i++) {
            $log = new Logs();

            $log->setDate('20 septembre 2024');
            $log->setLog('log exemple text exemple log');
            $log->setImg('https://animeland.fr/wp-content/uploads/2023/06/Fs_ET21aYAEDDcl.jpeg');

            $logsArray[$i] = $log;
            $manager->persist($logsArray[$i]);
        }


        

        

        $manager->flush();
    }
}
