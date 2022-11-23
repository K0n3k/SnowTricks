<?php

namespace App\DataFixtures;

use App\Entity\Commentary;
use App\Entity\Group;
use App\Entity\Media;
use App\Entity\Trick;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use App\Repository\GroupRepository;
use App\Service\MediaTreatment;
use App\Service\VideoUrlParser;
use Faker\Factory;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\AsciiSlugger;

class AppFixtures extends Fixture
{
    private const NB_USERS = 5;
    private const NB_TRICKS = 4;
    private const NB_COMMENTARIES = 15;
    private const GROUPS = ['grabs', 'rotations', 'flips', 'slides', 'jumps'];
    
    


    public function __construct(private UserPasswordHasherInterface $passwordHasher, private ParameterBagInterface $parameters, private ManagerRegistry $registry)
    {
        # code...
    }
    public function load(ObjectManager $manager): void
    {
        $images = scandir('./public/uploads/tricks');
        array_shift($images);
        array_shift($images);
        $faker = Factory::create('fr_FR');
        $videoUrlParser = new VideoUrlParser();
        $groups = [];
        $users = [];
        $tricks = [];
        foreach(self::GROUPS as $tmpgroup) {
            $group = new group();
            $group->setName($tmpgroup);
            $manager->persist($group);
            array_push($groups, $group);
        }
        for ($i = 1; $i <= self::NB_USERS; $i++) {
            $user = new User();
            $user
                ->setEmail($faker->email())
                ->setPassword($this->passwordHasher->hashPassword($user, 'a'))
                ->setusername($faker->name())
                ->setIsValidated(true)
                ->setAvatar('default.svg');
            $manager->persist($user);
            for ($j = 1; $j <= self::NB_TRICKS; $j++) {
                $trick = new Trick();
                $slugger = new AsciiSlugger();
                $image1 = new Media();
                $image1
                    ->setTrick($trick)
                    ->setType(MediaTreatment::IMAGE)
                    ->setFilename($images[$j]);
                $image2 = new Media();
                $image2
                        ->setTrick($trick)
                        ->setType(MediaTreatment::IMAGE)
                        ->setFilename($images[$j + self::NB_USERS * self::NB_TRICKS]);
                $video = new Media();
                $video
                    ->setTrick($trick)
                    ->setType(MediaTreatment::VIDEO)
                    ->setFilename($videoUrlParser->parse('https://www.youtube.com/watch?v=Ze3oi8DwpVk&ab_channel=Pentiminax'));
                shuffle($groups);
                $trick
                    ->addMedia($image1)
                    ->addMedia($video)
                    ->addMedia($image2)
                    ->setName($faker->words(3, true))
                    ->setSlug($slugger->slug($trick->getName()))
                    ->setUser($user)
                    ->setPublishedDate(new DateTime())
                    ->setDescription($faker->words(rand(250, 300), true))
                    ->setGroup($groups[0])
                    ->setMainMedia($image1);
                $manager->persist($trick);
                array_push($tricks, $trick);
            }
            array_push($users, $user);
        }

        foreach($tricks as $trick) {
            for($m = 0; $m < self::NB_COMMENTARIES; $m++) {
                shuffle($users);
                $commentary = new Commentary();
                $commentary
                    ->setUser($users[0])
                    ->setTrick($trick)
                    ->setPublishedDate(new DateTime())
                    ->setCommentary($faker->words(rand(20,60), true));
                $trick->addCommentary($commentary);
                $manager->persist($trick);
            }
        }


        $manager->flush();
    }

}
