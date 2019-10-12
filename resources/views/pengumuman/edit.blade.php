 @extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class=card>
               <div class="card-header">TAMBAH PENGUMUMAN</div>

               <div class="card-body">

                  {!! Form::model($Pengumuman,['route' => ['pengumuman.update',$Pengumuman->id],'method'=>'patch']) !!}
                  @include('pengumuman.form')
                  {!! Form::close() !!}
                </form>
                  
               </div>
             </div>
        </div>
    </div>
 </div>
               
@endsection 