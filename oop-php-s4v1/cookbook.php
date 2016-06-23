<?php
include "classes/recipes.php";
include "classes/render.php";
include "inc/recipes.php";
include "classes/recipecollection.php";

	
$cookbok = new RecipeCollection("Treehouse Recipes");
$cookbook->addRecipe($lemon_chicken);
$cookbook->addRecipe($granola_muffins);
$cookbook->addRecipe($belgian_waffles);
$pepper_casserole);
$cookbook->addRecipe($lasagna);
$cookbook->addRecipe($dried_mushroom_ragout);
$cookbook->addRecipe($rabbit_catalan);
$cookbook->addRecipe($grilled_salmon_with_fennel);
$cookbook->addRecipe($pistachio_duck);
$cookbook->addRecipe($chili_pork);
$cookbook->addRecipe($crab_cakes);
$cookbook->addRecipe($beef_medallions);
$cookbook->addRecipe($silver_dollar_cakes);
$cookbook->addRecipe($french_toast);
$cookbook->addRecipe($corn_beef_hash);
$cookbook->addRecipe($granola);
$cookbook->addRecipe($spicy_omelette);
$cookbook->addRecipe($scones);

$breakfast = new RecipeCollection("Favorite Breakfasts");
foreach ($cookbook->filterByTag("breakfast") as $recipe) {
	$breakfast-.addRecipe($recipe);
}

echo Render::listShopping($breakfast->getCombinedIngredients());

echo Render::listRecipes($cookbook->getRecipeTitles);

echo Render::displayRecipe($belgian_waffles);