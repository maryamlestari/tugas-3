<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\kategori_artikel;

class ArtikelController extends Controller
{
    public function index(){
    	$artikel=artikel::all();
    	return view('artikel.index', compact('artikel'));
   }
   public function show($id){
   	$artikel=artikel::find($id);
   	return view('artikel.show', compact('artikel'));
   }
  
   public function create(){
    $kategoriArtikel= kategori_artikel::pluck('nama','id');
    	return view('artikel.create', compact('kategoriArtikel'));
   }
   public function store(Request $request){
      $input= $request->all();
     
      artikel::create($input);
      return redirect(route('artikel.index'));

   }
}