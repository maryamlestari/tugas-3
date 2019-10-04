@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class=card>
               <div class="card-header">List Artikel</div>
               
               <div class="card-body">
                <a href="{!! route('artikel.create') !!}" class="btn btn-success">Tambah Data</a>
               <table border="1">
                <tr>
                  <td>id</td>
                  <td>judul</td>
                  <td>isi</td>
                  <td>users id</td>
                  <td>create</td>
                  <td>Aksi</td>

                  
                </tr>
                @foreach($artikel as $item)
                <tr>
          <td>{!! $item->id !!}</td>
          <td>{!! $item->judul !!}</td>
          <td>{!! $item->isi !!}</td>
          <td>{!! $item->users_id!!}</td>
          <td>{!! $item->created_at !!}</td>
          <td>

        

                <a href="{!! route('artikel.show',[$item->id]) !!}" class="btn btn-sm btn-success">
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