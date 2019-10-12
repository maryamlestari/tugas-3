<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeri;
use App\kategori_galeri;

class GaleriController extends Controller
{
    public function index(){
    	$galeri=galeri::all();
    	return view('galeri.index', compact('galeri'));
   }
   public function show($id){
   	$galeri=galeri::find($id);
   	return view('galeri.show', compact('galeri'));
   }
  
   public function create(){
    $kategoriGaleri= kategori_galeri::pluck('nama','id');
    	return view('galeri.create', compact('kategoriGaleri'));
   }
   public function store(Request $request){
      $input= $request->all();
     
      galeri::create($input);
      return redirect(route('galeri.index'));

  }
   public function edit($id){  
    $Galeri=galeri::find($id);

    if(empty($Galeri)){
      return redirect(route('galeri.index'));
    }
    return view('galeri.edit',compact('Galeri'));
  }
  public function update($id,Request $request){
    $Galeri=galeri::find($id);
    $input=$request->all();

    if(empty($Galeri)){
      return redirect(route('galeri.index'));
    }
    $Galeri->update($input);

    return redirect(route('galeri.index'));
  }

  }
