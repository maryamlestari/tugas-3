@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class=card>
               <div class="card-header">List Kategori Berita</div>
               
               <div class="card-body">
                <a href="{!! route('kategori_berita.create') !!}" class="btn btn-success">Tambah Data</a>
               <table border="1">
               <tr bgcolor='yellow' align="center">
                  <td>id</td>
                  <td>nama</td>
                  <td>users id</td>
                  
                  <td>Aksi</td>

                  
                </tr>
                @foreach($kategori_berita as $item)
                <tr>
          <td>{!! $item->id !!}</td>
          <td>{!! $item->nama !!}</td>
          <td>{!! $item->users_id!!}</td>
          
          <td>

        

                <a href="{!! route('kategori_berita.show',[$item->id]) !!}" class="btn btn-sm btn-success">
                  lihat </a>
                </td>
               </tr>
               @endforeach
                  
           </div>
        </div>
    </div>
 </div>
 </body>
</html>
               
@endsection