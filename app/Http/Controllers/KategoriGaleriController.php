<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_galeri;


class KategoriGaleriController extends Controller
{
    public function index(){
    	$kategori_galeri=kategori_galeri::all();
    	return view('kategori_galeri.index', compact('kategori_galeri'));
   }
   public function show($id){
   	$KategoriGaleri=kategori_galeri::find($id);
   	return view('kategori_galeri.show', compact('KategoriGaleri'));
   }
  
   public function create(){
    	return view('kategori_galeri.create');
   }
   public function store(Request $request){
      $input= $request->all();
     
      kategori_galeri::create($input);
      return redirect(route('kategori_galeri.index'));

}
   public function edit($id){  
    $KategoriGaleri=kategori_galeri::find($id);

    if(empty($KategoriGaleri)){
      return redirect(route('kategori_galeri.index'));
    }
    return view('kategori_galeri.edit',compact('KategoriGaleri'));
  }
  public function update($id,Request $request){
    $KategoriGaleri=kategori_galeri::find($id);
    $input=$request->all();

    if(empty($KategoriGaleri)){
      return redirect(route('kategori_galeri.index'));
    }
    $KategoriGaleri->update($input);

    return redirect(route('kategori_galeri.index'));
  }
  public function destroy($id){
    $KategoriGaleri=kategori_galeri::find($id);

    if(empty($KategoriGaleri)){
      return redirect(route('kategori_galeri.index'));
  }
    $KategoriGaleri->delete();
    return redirect(route('kategori_galeri.index'));
  }
}

