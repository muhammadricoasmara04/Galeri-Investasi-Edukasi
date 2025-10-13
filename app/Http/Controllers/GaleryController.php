<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
        $galery = include base_path('resources/utils/datagalery.php');
        return view('home.home', compact('galery'));
    }
}
