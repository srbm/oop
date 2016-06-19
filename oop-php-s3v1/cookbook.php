<?php 
include "classes/recipes.php";
include "classes/render.php"

$recipe1 = new Recipe();
$recipe1->setSource = "Grandma Holligan";
$recipe1->setTitle("my first recipe");
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 2, cup);


$recipe2 = new Recipe();
$recipe2->setSource = "Betty Crocker";
$recipe2->setTitle("My Second Recipe");


$recipe1->addInstruction("This is my first instruction");
$recipe2->addInstruciton("This is my second insruction");


$recipe1->addTag("Breakfast");
recept1->addTag("Main Course");


$recipe1->setYield("6 servings");

echo Render::displayRecipe($recipe);
