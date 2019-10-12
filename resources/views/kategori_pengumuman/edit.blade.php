 @extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class=card>
               <div class="card-header">TAMBAH KATEGORI PENGUMUMAN</div>

               <div class="card-body">

                  {!! Form::model($KategoriPengumuman,['route' => ['kategori_pengumuman.update',$KategoriPengumuman->id],'method'=>'patch']) !!}
                  @include('kategori_pengumuman.form')
                  {!! Form::close() !!}
                </form>
                  
               </div>
             </div>
        </div>
    </div>
 </div>
               
@endsection 