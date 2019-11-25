<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
class RecipesController extends Controller
{
    public function recipeView($recipe_id)
    {
        $recipe = Recipe::where('recipe_id', $recipe_id)->first();
        
        $ingredients_list = $recipe->ingredients;
        $ingredients_arr = explode(',', $ingredients_list);
        $amounts_list = $recipe->amounts;
        $amounts_arr = explode(',', $amounts_list);

        return view("recipeView")->with('recipe', $recipe)->with('ingredients_arr', $ingredients_arr)
        ->with('amounts_arr', $amounts_arr);
    }


}
