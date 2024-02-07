<?php

namespace App\DataFixtures;

use App\Entity\Ingredient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class IngredientFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $ingredient = new Ingredient();
        $ingredient->setName('Spaghetti');
        $ingredient->setQuantity(500);
        $ingredient->setUnit('g');
        $manager->persist($ingredient);

        $ingredient2 = new Ingredient();
        $ingredient2->setName('Minced Meat');
        $ingredient2->setQuantity(300);
        $ingredient2->setUnit('g');
        $manager->persist($ingredient2);

        $ingredient3 = new Ingredient();
        $ingredient3->setName('Chicken');
        $ingredient3->setQuantity(800);
        $ingredient3->setUnit('g');
        $manager->persist($ingredient3);

        $ingredient4 = new Ingredient();
        $ingredient4->setName('Rice');
        $ingredient4->setQuantity(1000);
        $ingredient4->setUnit('g');
        $manager->persist($ingredient4);

        $ingredient5 = new Ingredient();
        $ingredient5->setName('Flour');
        $ingredient5->setQuantity(500);
        $ingredient5->setUnit('g');
        $manager->persist($ingredient5);

        $ingredient6 = new Ingredient();
        $ingredient6->setName('Chocolate');
        $ingredient6->setQuantity(200);
        $ingredient6->setUnit('g');
        $manager->persist($ingredient6);

        $ingredient7 = new Ingredient();
        $ingredient7->setName('Milk');
        $ingredient7->setQuantity(1000);
        $ingredient7->setUnit('ml');
        $manager->persist($ingredient7);

        $ingredient8 = new Ingredient();
        $ingredient8->setName('Eggs');
        $ingredient8->setQuantity(10);
        $ingredient8->setUnit('pieces');
        $manager->persist($ingredient8);

        $manager->flush();

        $this->addReference('ingredient_1', $ingredient);
        $this->addReference('ingredient_2', $ingredient2);
        $this->addReference('ingredient_3', $ingredient3);
        $this->addReference('ingredient_4', $ingredient4);
        $this->addReference('ingredient_5', $ingredient5);
        $this->addReference('ingredient_6', $ingredient6);
        $this->addReference('ingredient_7', $ingredient7);
        $this->addReference('ingredient_8', $ingredient8);
    }
}
