<?php

namespace App\DataFixtures;

use App\Entity\Recipe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RecipeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $recipe = new Recipe();
        $recipe->setTitle('Spaghetti Bolognese');
        $recipe->setPreparationTime(60);
        $recipe->setDescription('Spaghetti Bolognese is a popular Italian recipe.');
        $recipe->setImagePath('https://cdn.pixabay.com/photo/2020/01/07/05/52/spaghetti-4746831_960_720.jpg');
        $recipe->addIngredient($this->getReference('ingredient_1'));
        $recipe->addIngredient($this->getReference('ingredient_2'));
        $manager->persist($recipe);

        $recipe2 = new Recipe();
        $recipe2->setTitle('Chicken Curry');
        $recipe2->setPreparationTime(90);
        $recipe2->setDescription('Chicken Curry is a popular dish in many parts of the world.');
        $recipe2->setImagePath('https://cdn.pixabay.com/photo/2022/06/07/20/52/curry-7249247_1280.jpg');
        $recipe2->addIngredient($this->getReference('ingredient_3'));
        $recipe2->addIngredient($this->getReference('ingredient_4'));
        $manager->persist($recipe2);

        $recipe3 = new Recipe();
        $recipe3->setTitle('Chocolate Cake');
        $recipe3->setPreparationTime(120);
        $recipe3->setDescription('Chocolate Cake is a delicious dessert.');
        $recipe3->setImagePath('https://cdn.pixabay.com/photo/2016/11/22/18/52/cake-1850011_1280.jpg');
        $recipe3->addIngredient($this->getReference('ingredient_5'));
        $recipe3->addIngredient($this->getReference('ingredient_6'));
        $manager->persist($recipe3);

        $recipe4 = new Recipe();
        $recipe4->setTitle('Pancakes');
        $recipe4->setPreparationTime(30);
        $recipe4->setDescription('Pancakes are a popular breakfast dish.');
        $recipe4->setImagePath('https://cdn.pixabay.com/photo/2017/01/30/13/49/pancakes-2020863_1280.jpg');
        $recipe4->addIngredient($this->getReference('ingredient_7'));
        $recipe4->addIngredient($this->getReference('ingredient_8'));
        $manager->persist($recipe4);

        $manager->flush();
    }
}
