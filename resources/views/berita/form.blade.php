@csrf

<div class="form-group row">
    <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul') }}</label>

        <div class="col-md-6">
                {!! Form::text('judul',null,['class'=>"form-control",'required','autofokus']); !!}

                @error('judul')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
</div>

<div class="form-group row">
    <label for="kategori_berita_id" class="col-md-4 col-form-label text-md-right">{{ __('kategori Berita') }}</label>

        <div class="col-md-6">
           
                    {!!Form::select('kategori_berita_id',$kategoriBerita,null,["class"=>"form-control","required"])!!}

                @error('kategori_berita_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
</div>

<div class="form-group row">
    <label for="isi" class="col-md-4 col-form-label text-md-right">{{ __('isi') }}</label>

        <div class="col-md-6">
           
            {!!Form::textarea('isi',null,['class'=>'form-control']);!!}

                @error('isi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
</div>

{!! Form::hidden('users_id',Auth::id() ); !!}

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Simpan Data') }}
        </button>

        <a href="{!! route('kategori_berita.index') !!}" class="btn btn-danger">
            {{ __('Batal') }}
        </a>

    </div>
</div>
                