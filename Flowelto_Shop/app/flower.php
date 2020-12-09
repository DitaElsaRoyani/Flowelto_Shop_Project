<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\HomeCategory;

class flower extends Model
{
    public function Tocategory(){
        return $this->belongsTo(HomeCategory::class,'Category');
    }
    protected $table = "_flower_produk";
}
