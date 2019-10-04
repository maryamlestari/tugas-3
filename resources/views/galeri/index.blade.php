@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class=card>
               <div class="card-header">List Galeri</div>
               
               <div class="card-body">
                <a href="{!! route('galeri.create') !!}" class="btn btn-success">Tambah Data</a>
               <table border="1">
                <tr bgcolor='yellow' align="center">
                  <td>id</td>
                  <td>nama</td>
                  <td>keterangan</td>
                  <td>path</td>
                  <td>create</td>
                  <td>Aksi</td>

                  
                </tr>
                @foreach($galeri as $item)
                <tr>
          <td>{!! $item->id !!}</td>
          <td>{!! $item->nama !!}</td>
          <td>{!! $item->keterangan !!}</td>
          <td>{!! $item->path!!}</td>
          <td>{!! $item->created_at !!}</td>
          <td>

        

                <a href="{!! route('galeri.show',[$item->id]) !!}" class="btn btn-sm btn-success">
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