<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_artikel;


class KategoriArtikelController extends Controller
{
    public function index(){
    	$kategori_artikel=kategori_artikel::all();
    	return view('kategori_artikel.index', compact('kategori_artikel'));
   }
   public function show($id){
   	$KategoriArtikel=kategori_artikel::find($id);
   	return view('kategori_artikel.show', compact('KategoriArtikel'));
   }
  
   public function create(){
    	return view('kategori_artikel.create');
   }
   public function store(Request $request){
      $input= $request->all();
     
      kategori_artikel::create($input);
      return redirect(route('kategori_artikel.index'));

   }
   public function edit($id){  
    $KategoriArtikel=kategori_artikel::find($id);

    if(empty($KategoriArtikel)){
      return redirect(route('kategori_artikel.index'));
    }
    return view('kategori_artikel.edit',compact('KategoriArtikel'));
  }
  public function update($id,Request $request){
    $KategoriArtikel=kategori_artikel::find($id);
    $input=$request->all();

    if(empty($KategoriArtikel)){
      return redirect(route('kategori_artikel.index'));
    }
    $KategoriArtikel->update($input);

    return redirect(route('kategori_artikel.index'));
  }
  public function destroy($id){
    $KategoriArtikel=kategori_artikel::find($id);

    if(empty($KategoriArtikel)){
      return redirect(route('kategori_artikel.index'));
  }
    $KategoriArtikel->delete();
    return redirect(route('kategori_artikel.index'));
  }
}
