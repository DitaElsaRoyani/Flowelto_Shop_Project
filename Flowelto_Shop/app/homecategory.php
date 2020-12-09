<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeCategory extends Model
{
    public function flower(){
            return $this->hasMany(flower::class);
        }
        protected $table = "_category";
 }

