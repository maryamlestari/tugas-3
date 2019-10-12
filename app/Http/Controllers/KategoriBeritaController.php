<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_berita;


class KategoriBeritaController extends Controller
{
    public function index(){
      $kategori_berita=kategori_berita::all();
      return view('kategori_berita.index', compact('kategori_berita'));
   }
   public function show($id){
    $KategoriBerita=kategori_berita::find($id);
    return view('kategori_berita.show', compact('KategoriBerita'));
   }
  
   public function create(){
      return view('kategori_berita.create');
   }
   public function store(Request $request){
      $input= $request->all();
     
      kategori_berita::create($input);
      return redirect(route('kategori_berita.index'));

   }
   public function edit($id){  
    $KategoriBerita=kategori_berita::find($id);

    if(empty($KategoriBerita)){
      return redirect(route('kategori_berita.index'));
    }
    return view('kategori_berita.edit',compact('KategoriBerita'));
  }
  public function update($id,Request $request){
    $KategoriBerita=kategori_berita::find($id);
    $input=$request->all();

    if(empty($KategoriBerita)){
      return redirect(route('kategori_berita.index'));
    }
    $KategoriBerita->update($input);

    return redirect(route('kategori_berita.index'));
  }   public function destroy($id){
    $KategoriBerita=kategori_berita::find($id);

    if(empty($KategoriBerita)){
      return redirect(route('kategori_berita.index'));
  }
    $KategoriBerita->delete();
    return redirect(route('kategori_berita.index'));
  }
}

