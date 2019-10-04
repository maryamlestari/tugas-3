<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengumuman;
use App\kategori_pengumuman;

class PengumumanController extends Controller
{
    public function index(){
    	$pengumuman=pengumuman::all();
    	return view('pengumuman.index', compact('pengumuman'));
   }
   public function show($id){
   	$pengumuman=pengumuman::find($id);
   	return view('pengumuman.show', compact('pengumuman'));
   }
  
   public function create(){
    $kategoriPengumuman= kategori_pengumuman::pluck('nama','id');
    	return view('pengumuman.create', compact('kategoriPengumuman'));
   }
   public function store(Request $request){
      $input= $request->all();
     
      berita::create($input);
      return redirect(route('pengumuman.index'));

   }
}