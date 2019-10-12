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
   public function edit($id){  
    $Pengumuman=pengumuman::find($id);

    if(empty($Pengumuman)){
      return redirect(route('pengumuman.index'));
    }
    return view('pengumuman.edit',compact('Pengumuman'));
  }
  public function update($id,Request $request){
    $Pengumuman=pengumuman::find($id);
    $input=$request->all();

    if(empty($Pengumuman)){
      return redirect(route('pengumuman.index'));
    }
    $Pengumuman->update($input);

    return redirect(route('pengumuman.index'));
  }

  }
