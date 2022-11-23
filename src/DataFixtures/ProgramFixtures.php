<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $program = new Program();
        $program->setTitle('Walking dead');
        $program->setSynopsis('Des zombies envahissent la terre');
        $program->setPoster('The_Walking_Dead_2010_logo.svg.png');
        $program->setCategory($this->getReference('category_Action'));
        $manager->persist($program);
        $manager->flush();

        $program = new Program();
        $program->setTitle('Tomb Raider');
        $program->setSynopsis('Lara Croft taking names again');
        $program->setPoster('Lara_Croft_Tomb_Raider.jpg');
        $program->setCategory($this->getReference('category_Aventure'));
        $manager->persist($program);
        $manager->flush();

        $program = new Program();
        $program->setTitle('Toy Story');
        $program->setSynopsis('Reach for the stars');
        $program->setPoster('p17420_p_v12_ae.jpg');
        $program->setCategory($this->getReference('category_Animation'));
        $manager->persist($program);
        $manager->flush();

        $program = new Program();
        $program->setTitle('Harry Potter');
        $program->setSynopsis('A wee bit of magic');
        $program->setPoster('pic_1545067980_5.jpg');
        $program->setCategory($this->getReference('category_Fantastique'));
        $manager->persist($program);
        $manager->flush();

        $program = new Program();
        $program->setTitle('SAW III');
        $program->setSynopsis('A wee bit scary');
        $program->setPoster('p161797_p_v10_ak.jpg');
        $program->setCategory($this->getReference('category_Horreur'));
        $manager->persist($program);
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
          CategoryFixtures::class,
        ];
    }


}
