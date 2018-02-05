<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use AppBundle\Entity\Admin;

class AdminData extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $admin = new Admin();
        $admin->setUsername('Admin')
        ->setEmail('admin@admin.fr')
        ->setPlainPassword('test')
        ->setEnabled(true)
        ->setSuperAdmin(true)
        ->setPrenom('admin')
        ->setNom('admin')
        ->setTelephone('0102030405');

        $manager->persist($admin);
        $manager->flush();

        $this->addReference('admin', $admin);
    }
}