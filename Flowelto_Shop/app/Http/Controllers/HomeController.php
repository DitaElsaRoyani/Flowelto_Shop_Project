<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\homecategory;

class HomeController extends Controller
{
    public function homepage(){
        $CategoryFlower = homecategory::all();
        return view('Home_Flowelto',['homecategory'=>$CategoryFlower]);
    }
}
