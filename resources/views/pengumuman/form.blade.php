@csrf

<div class="form-group row">
    <label for="judul" class="col-md-2 col form-label text-md-right">{{__('judul')}}</label>

    <div class="col-md-10">
     {!! Form::text('judul', null,['class'=>"form-control",'required','autofocus']); !!}

    @error('judul')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $massege }}</strong>

    </span>
    @enderror
    </div>
</div>

<div class="Form-group row">
    <label for="pengumuman_id" class="col-md-2 col Form-label text-md-right">{{__('Pengumuman')}}</label>

    <div class="col-md-10">
    {!! Form::select('pengumuman_id', $Pengumuman, null, ["class"=> "form-control", "required"]) !!}

    @error('pengumuman_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    </div>
</div>
<div class="Form-group row">
    <label for="isi" class="col-md-2 col Form-label text-md-right">{{__('Isi')}}</label>

    <div class="col-md-10">
    {!! Form::textarea('isi', null,['class'=>'form-control']); !!}

    @error('isi')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $messege }}</strong>
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
                        
            <a href="{!! route('pengumuman.index') !!}"class="btn btn-danger">
                                    {{ __('Batal') }}

                                </a>
                    </button>
                    </div>
                </div>