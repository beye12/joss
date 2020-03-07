@extends('layouts.admin')

@section('content')

<form method="POST" action="{{ route('kategori.store') }}">
                        @csrf

    <div class="form-group row">
        <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

            <div class="col-md-6">
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}">

                     @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                      @enderror
            </div>
    </div>

    <div class="form-group row">
        <label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>

            <div class="col-md-6">
                <input id="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi') }}">

                     @error('deskripsi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                      @enderror
            </div>
    </div>


    <div class="form-group row">
        <label for="coba" class="col-md-4 col-form-label text-md-right">{{ __('Coba') }}</label>

            <div class="col-md-6">
                <input id="coba" type="text" class="form-control @error('coba') is-invalid @enderror" name="coba" value="{{ old('coba') }}"R>

                     @error('coba')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                      @enderror
            </div>
    </div>

    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right"></label>

            <div class="col-md-6">
                <button type="submit" class ="btn btn-primary">Simpan</button>
            </div>
    </div>

</form



@endsection