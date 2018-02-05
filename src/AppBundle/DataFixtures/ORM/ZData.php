<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use AppBundle\Entity\Annonce;

class ZData extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        function randomTitre()
        {
            $listeMots = array(
                'alias', 'consequatur', 'aut', 'perferendis', 'sit', 'voluptatem',
                'accusantium', 'doloremque', 'aperiam', 'eaque', 'ipsa', 'quae', 'ab',
                'illo', 'inventore', 'veritatis', 'et', 'quasi', 'architecto',
                'beatae', 'vitae', 'dicta', 'sunt', 'explicabo', 'aspernatur', 'aut',
                'odit', 'aut', 'fugit', 'sed', 'quia', 'consequuntur', 'magni',
                'dolores', 'eos', 'qui', 'ratione', 'voluptatem', 'sequi', 'nesciunt',
                'neque', 'dolorem', 'ipsum', 'quia', 'dolor', 'sit', 'amet',
                'consectetur', 'adipisci', 'velit', 'sed', 'quia', 'non', 'numquam',
                'eius', 'modi', 'tempora', 'incidunt', 'ut', 'labore', 'et', 'dolore',
                'magnam', 'aliquam', 'quaerat', 'voluptatem', 'ut', 'enim', 'ad',
                'minima', 'veniam', 'quis', 'nostrum', 'exercitationem', 'ullam',
                'corporis', 'nemo', 'enim', 'ipsam', 'voluptatem', 'quia', 'voluptas',
                'sit', 'suscipit', 'laboriosam', 'nisi', 'ut', 'aliquid', 'ex', 'ea',
                'commodi', 'consequatur', 'quis', 'autem', 'vel', 'eum', 'iure',
                'reprehenderit', 'qui', 'in', 'ea', 'voluptate', 'velit', 'esse',
                'quam', 'nihil', 'molestiae', 'et', 'iusto', 'odio', 'dignissimos',
                'ducimus', 'qui', 'blanditiis', 'praesentium', 'laudantium', 'totam',
                'rem', 'voluptatum', 'deleniti', 'atque', 'corrupti', 'quos',
                'dolores', 'et', 'quas', 'molestias', 'excepturi', 'sint',
                'occaecati', 'cupiditate', 'non', 'provident', 'sed', 'ut',
                'perspiciatis', 'unde', 'omnis', 'iste', 'natus', 'error',
                'similique', 'sunt', 'in', 'culpa', 'qui', 'officia', 'deserunt',
                'mollitia', 'animi', 'id', 'est', 'laborum', 'et', 'dolorum', 'fuga',
                'et', 'harum', 'quidem', 'rerum', 'facilis', 'est', 'et', 'expedita',
                'distinctio', 'nam', 'libero', 'tempore', 'cum', 'soluta', 'nobis',
                'est', 'eligendi', 'optio', 'cumque', 'nihil', 'impedit', 'quo',
                'porro', 'quisquam', 'est', 'qui', 'minus', 'id', 'quod', 'maxime',
                'placeat', 'facere', 'possimus', 'omnis', 'voluptas', 'assumenda',
                'est', 'omnis', 'dolor', 'repellendus', 'temporibus', 'autem',
                'quibusdam', 'et', 'aut', 'consequatur', 'vel', 'illum', 'qui',
                'dolorem', 'eum', 'fugiat', 'quo', 'voluptas', 'nulla', 'pariatur',
                'at', 'vero', 'eos', 'et', 'accusamus', 'officiis', 'debitis', 'aut',
                'rerum', 'necessitatibus', 'saepe', 'eveniet', 'ut', 'et',
                'voluptates', 'repudiandae', 'sint', 'et', 'molestiae', 'non',
                'recusandae', 'itaque', 'earum', 'rerum', 'hic', 'tenetur', 'a',
                'sapiente', 'delectus', 'ut', 'aut', 'reiciendis', 'voluptatibus',
                'maiores', 'doloribus', 'asperiores', 'repellat'
            );
            
            $random_titre = array_rand($listeMots, 5);

            return $listeMots[$random_titre[1]]." ".$listeMots[$random_titre[2]]." ". $listeMots[$random_titre[3]]." ". $listeMots[$random_titre[4]];
        }

        $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut congue non urna in efficitur. Suspendisse vestibulum, purus non rutrum feugiat, magna velit lacinia risus, vel varius elit turpis venenatis lacus. Donec varius et ante eget facilisis. Nulla pretium dui a lectus ornare pulvinar. Vivamus velit sapien, lacinia vitae bibendum scelerisque, rutrum a risus. Nullam rhoncus tristique enim eget vulputate. Donec at velit nec augue fringilla efficitur vel in ipsum. Vestibulum id ipsum ut lectus convallis semper. Etiam convallis mi vel neque tristique, non sodales nulla laoreet. Aenean eget viverra leo, ac efficitur tellus. Nam non nunc mauris. Curabitur ac tincidunt velit, et eleifend nibh. Morbi purus ligula, tempus eget risus ut, ornare suscipit magna.

Sed dolor nisl, egestas vitae justo tempus, tristique molestie dolor. Quisque feugiat tempus suscipit. Donec sapien nisi, sodales ac lobortis sed, vulputate nec odio. Nulla facilisi. Maecenas consectetur eros ut scelerisque vestibulum. Nulla eu iaculis risus, at imperdiet diam. Pellentesque semper, dui sodales viverra hendrerit, velit magna fringilla nibh, vel aliquet sapien urna eget turpis. Aenean ornare mauris ut fermentum finibus. Phasellus eu enim commodo, mollis nisl blandit, ornare risus.

Fusce nisl velit, placerat non arcu quis, dignissim malesuada urna. Morbi non nisl tellus. Sed cursus purus justo, eget dignissim erat ultricies sit amet. Aliquam lacinia elit eu pretium euismod. Duis hendrerit, dui a pulvinar suscipit, dolor elit fermentum urna, quis lobortis ante justo a nulla. Maecenas ac tempor turpis. Sed eget pulvinar ante. Duis sit amet magna ac mi convallis iaculis. Phasellus tempus gravida vulputate.

Maecenas laoreet, dolor et efficitur tempor, diam enim malesuada diam, ut laoreet elit enim et enim. In hac habitasse platea dictumst. Sed placerat posuere massa sed laoreet. Morbi feugiat lobortis luctus. Maecenas maximus egestas nisi ornare egestas. Fusce nec convallis mi, ut finibus nibh. Sed at semper massa, eu luctus urna. Suspendisse pulvinar mattis tortor, eu iaculis dui auctor id. Nulla facilisi. Sed et dictum tellus. Nunc hendrerit sapien diam, nec luctus quam malesuada id. Donec eu ullamcorper neque, ac placerat libero. Etiam lobortis ante in efficitur ornare. Donec sagittis sit amet urna eget fermentum. Fusce non elit rutrum, ornare ex sed, iaculis odio. Pellentesque iaculis metus urna, sed tincidunt velit mollis et.

Nullam vitae accumsan metus. Fusce non lectus a odio tincidunt interdum non sed nunc. Vestibulum hendrerit sapien lacus, ac sollicitudin leo cursus ut. Ut purus sem, tincidunt non nisi vitae, tempor porttitor felis. Pellentesque tincidunt, erat a dapibus ultrices, eros metus tempor sem, at ultrices lorem nulla sit amet elit. Duis rhoncus malesuada varius. Pellentesque porta sapien diam, et aliquam turpis ultricies et. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean condimentum lectus orci, at efficitur nisl accumsan id. Sed pharetra condimentum felis, nec cursus mi. Etiam ante tellus, condimentum in tellus sit amet, efficitur dapibus sapien. Ut eget hendrerit justo. Nulla aliquam felis velit, sed vestibulum ipsum pellentesque a. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi commodo at elit scelerisque pharetra.";

        $j = 0;
        $nbAnnnonce= 10;
        for ($i = 0; $i < $nbAnnnonce; $i++) {
            $randPicture = rand(1, 7);
            $annonce = new Annonce();
            $annonce->setTitre(randomTitre())
                ->setPhoto($randPicture . ".jpg")
                ->setNbPiece(rand(8, 12))
                ->setPrix(rand(100000, 1000000))
                ->setTelephone('0102030405')
                ->setAdmOid($this->getReference('admin'))
                ->setCliOid($this->getReference('client'.$i))
                ->setDescription($lorem);
                if ($j<$nbAnnnonce/2) {
                    $annonce->setTypOid($this->getReference('type1'));
                    $j++;
                }else{
                    $annonce->setTypOid($this->getReference('type2'));
                    $j++;
                }

            $manager->persist($annonce);
            $manager->flush();
        }
    }
}