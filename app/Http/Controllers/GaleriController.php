<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeri;

class GaleriController extends Controller
{
    public function index(){
    	$galeri=galeri::all();

    	return view ('galeri.index', compact('galeri'));
    }
}

