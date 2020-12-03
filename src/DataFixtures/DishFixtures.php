<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Dish;
use App\Entity\Category;
use App\Entity\Comment;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class DishFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = \Faker\Factory::create('fr_FR');

        // Création de 3 catégories fakées
        for($i=1; $i <= 3; $i++) {
            $category = new Category();
            $category->setTitle($faker->sentence())
                      ->setDescription($faker->paragraph());

            $manager->persist($category);

            //Creation de 4 à 6 articles

            for($j=1; $j <= mt_rand(4,6); $j++) { //mt_rand() fonction php renvoyant des objets entre 2 nombres
                $dish = new Dish();

                $ingredient = '<p>' . join($faker->paragraphs(5),'</p><p>') . '</p>';

                $dish->setName($faker->sentence())
                        ->setIngredient($ingredient)
                        ->setImage($faker->imageUrl())
                        ->setCreatedAt($faker->dateTimeBetween('-6 months'))
                        ->setCategory($category);

                $manager->persist($dish);

                // Création de commentaire pour le plat

                for($k=1; $k <= mt_rand(4,10); $k++) {
                    $comment = new Comment();

                    $content = '<p>' . join($faker->paragraphs(2),'</p><p>') . '</p>';

                    $now = new \DateTime();
                    $days = $now->diff($dish->getCreatedAt())->days;
                    $minimum = '-' . $days . ' days'; //-100 days

                    $comment->setAuthor($faker->name())
                                ->setContent($content)
                                ->setCreatedAt($faker->dateTimeBetween($minimum))
                                ->setDish($dish);

                    $manager->persist($comment);
                }
            }
        }

        $manager->flush();
    }
}
