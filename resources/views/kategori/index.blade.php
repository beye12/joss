@extends('layouts.admin')

@section('menu_kategori', 'active')

@section('content')
    <div class="container" >
        <div class="row" >
            <div class="col-12" >
                <a href="{{route('kategori.create')}}" class ="btn btn-primary">Tambah</a>
               
                <table class="table" >
                    <thead>
                        <tr>
                            <td>Nama</td>
                            <td>Deskripsi</td>
                            <td>Coba</td>
                            <td width="15%">Edit</td>
                        </tr>
                    </thead>

                    <tbody>

                    @foreach($model as $key => $value)
                            <tr>
                                <td>{{$value->nama}}</td>
                                <td>{{$value->deskripsi}}</td>
                                <td>{{$value->coba}}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{route('kategori.edit', ['id' => $value->id])}}">Ubah</a>
                                    <a class="btn btn-danger btn-sm" href="{{route('kategori.destroy', ['id' => $value->id])}}" onClick="return confirm('Yakin akan dihapus?');">Hapus</a>
                            </tr>
                            @endforeach
                    </tbody>


                </table>
            </div>
        </div>

        <div class="row">
    <div class="col-12">
        {{$model->links()}}
    </div>

    </div>

   





@endsection