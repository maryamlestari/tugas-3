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
                  <td>update</td>
                  <td>Aksi</td>

                  
                </tr>
                @foreach($galeri as $item)
                <tr>
          <td>{!! $item->id !!}</td>
          <td>{!! $item->nama !!}</td>
          <td>{!! $item->keterangan !!}</td>
          <td>{!! $item->path!!}</td>
          <td>{!! $item->created_at !!}</td>
          <td>{!! $item->updated_at !!}</td>
          <td>

        

                <a href="{!! route('galeri.show',[$item->id]) !!}" class="btn btn-sm btn-success">
                  lihat </a>
                <a href="{!! route('galeri.edit',[$item->id]) !!}" class="btn btn-sm btn-warning">
                  ubah
                </a>
                {!! Form::open(['route' => ['kategori_galeri.destroy',$item->id],'method'=>'delete']) !!}

                 {!! Form::submit('Hapus',['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')"]) !!}

                 {!! Form::close() !!}
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