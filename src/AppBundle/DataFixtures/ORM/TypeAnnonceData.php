<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\TypeAnnonce;

class TypeAnnonceData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Type Vente
        $type = new TypeAnnonce();
        $type->setNom('Vente');
        $manager->persist($type);
        $manager->flush();
        // Type Location
        $type = new TypeAnnonce();
        $type->setNom('Location');
        $manager->persist($type);
        $manager->flush();

    }
}
