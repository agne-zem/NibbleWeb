<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    protected $table = 'recipes';
    protected $fillable= ['recipe_id','title', 'ingredients','amounts', 'photo_url', 'description', 'created_at', 'updated_at', 'USERS_user_id'];

}
