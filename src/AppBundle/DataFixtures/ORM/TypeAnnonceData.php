<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use AppBundle\Entity\TypeAnnonce;

class TypeAnnonceData extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Type Vente
        $type = new TypeAnnonce();
        $type->setNom('Vente');
        
        // Type Location
        $type2 = new TypeAnnonce();
        $type2->setNom('Location');

        $manager->persist($type);
        $manager->persist($type2);
        $manager->flush();

        $this->addReference('type1', $type);
        $this->addReference('type2', $type2);

    }
}
