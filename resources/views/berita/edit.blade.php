 @extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class=card>
               <div class="card-header">TAMBAH  BERITA</div>

               <div class="card-body">

                  {!! Form::model($Berita,['route' => ['berita.update',$Berita->id],'method'=>'patch']) !!}
                  @include('berita.form')
                  {!! Form::close() !!}
                </form>
                  
               </div>
             </div>
        </div>
    </div>
 </div>
               
@endsection 