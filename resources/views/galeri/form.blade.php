@csrf

<div class="form-group row">
    <label for="nama" class="col-md-2 col form-label text-md-right">{{__('Nama')}}</label>

    <div class="col-md-10">
      {!! Form::text('judul', null,['class'=>"form-control",'required','autofocus']); !!}

    @error('nama')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $massege }}</strong>
    </span>
    @enderror
    </div>
</div>

<div class="form-group row">
    <label for="keterangan" class="col-md-2 col form-label text-md-right">{{__('keterangan')}}</label>

    <div class="col-md-10">
    <input id="keterangan" type="text" class="Form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" required autofocus>

    @error('keterangan')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $massege }}</strong>
    </span>
    @enderror
    </div>
</div>

<div class="form-group row">
    <label for="path" class="col-md-2 col form-label text-md-right">{{__('Path')}}</label>

    <div class="col-md-10">
    <input id="path" type="text" class="Form-control @error('path') is-invalid @enderror" name="path" value="{{ old('path') }}" required autofocus>

    @error('path')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $massege }}</strong>
    </span>
    @enderror
    </div>
</div>

<div class="Form-group row">
    <label for="kategori_berita_id" class="col-md-2 col Form-label text-md-right">{{__('Galeri')}}</label>

    <div class="col-md-10">
    {!! Form::select('galeri_id', $Galeri, null, ["class"=> "Form-control", "required"]) !!}

    @error('galeri_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    </div>
</div>


{!! Form::hidden('users_id',Auth::id() ); !!}

<div class="Form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Simpan') }}
        </button>
                 <button>
                        
            <a href="{!! route('galeri.index') !!}"class="btn btn-danger">
                                    {{ __('Batal') }}

                                </a>
                    </button>
                    </div>
                </div>