@extends('layouts.admin')

@section('menu_produk', 'active')

@section('content')
    <div class="container" >
        <div class="row" >
            <div class="col-12" >
                <a href="{{route('produk.create')}}" class ="btn btn-primary">Tambah</a>
               
                <table class="table" >
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>Harga</td>
                            <td>Diskon</td>
                            <td>Kategori</td>
                            <td>Keterangan</td>
                            
                            <td width="15%">Edit</td>
                        </tr>
                    </thead>

                    <tbody>

                    @foreach($model as $key => $value)
                            <tr>
                                <td>{{$value->id}}</td>
                                <td>{{$value->nama}}</td>
                                <td>{{$value->harga}}</td>
                                <td>{{$value->diskon}}</td>
                                <td>{{$value->nama_kategori}}</td>
                                <td>{{$value->deskripsi}}</td>
                                
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{route('produk.edit', ['id' => $value->id])}}">Ubah</a>
                                    <a class="btn btn-danger btn-sm" href="{{route('produk.destroy', ['id' => $value->id])}}" onClick="return confirm('Yakin akan dihapus?');">Hapus</a>
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