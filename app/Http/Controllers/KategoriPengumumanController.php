<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_pengumuman;


class KategoriPengumumanController extends Controller
{
    public function index(){
    	$kategori_pengumuman=kategori_pengumuman::all();
    	return view('kategori_pengumuman.index', compact('kategori_pengumuman'));
   }
   public function show($id){
   	$KategoriPengumuman=kategori_pengumuman::find($id);
   	return view('kategori_Pengumuman.show', compact('KategoriPengumuman'));
   }
  
   public function create(){
    	return view('kategori_pengumuman.create');
   }
   public function store(Request $request){
      $input= $request->all();
     
      kategori_pengumuman::create($input);
      return redirect(route('kategori_pengumuman.index'));
  }
   public function edit($id){  
    $KategoriPengumuman=kategori_pengumuman::find($id);

    if(empty($KategoriPengumuman)){
      return redirect(route('kategori_pengumuman.index'));
    }
    return view('kategori_pengumuman.edit',compact('KategoriPengumuman'));
  }
  public function update($id,Request $request){
    $KategoriPengumuman=kategori_pengumuman::find($id);
    $input=$request->all();

    if(empty($KategoriPengumuman)){
      return redirect(route('kategori_pengumuman.index'));
    }
    $KategoriPengumuman->update($input);

    return redirect(route('kategori_pengumuman.index'));
  }
    public function destroy($id){
    $KategoriPengumuman=kategori_pengumuman::find($id);

    if(empty($KategoriPengumuman)){
      return redirect(route('kategori_pengumuman.index'));
  }
    $KategoriPengumuman->delete();
    return redirect(route('kategori_pengumuman.index'));
  }
}

