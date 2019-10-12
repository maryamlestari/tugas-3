<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;
use App\kategori_berita;

class BeritaController extends Controller
{
    public function index(){
    	$berita=berita::all();
    	return view('berita.index', compact('berita'));
   }
   public function show($id){
   	$berita=berita::find($id);
   	return view('berita.show', compact('berita'));
   }
  
   public function create(){
    $kategoriBerita= kategori_berita::pluck('nama','id');
    	return view('berita.create', compact('kategoriBerita'));
   }
   public function store(Request $request){
      $input= $request->all();
     
      berita::create($input);
      return redirect(route('berita.index'));

   }
   public function edit($id){  
    $Berita=berita::find($id);

    if(empty($Berita)){
      return redirect(route('berita.index'));
    }
    return view('berita.edit',compact('Berita'));
  }
  public function update($id,Request $request){
    $Berita=berita::find($id);
    $input=$request->all();

    if(empty($Berita)){
      return redirect(route('berita.index'));
    }
    $Berita->update($input);

    return redirect(route('berita.index'));
  }

  }
