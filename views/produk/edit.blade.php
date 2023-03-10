@extends('layouts.appAdmin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Masukan Data Informasi Produk</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('produk.update', $data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" name="nama_produk"
                                    value="{{ $data->nama_produk }}">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" id="" cols="20" rows="10" class="form-control">{{ $data->deskripsi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Harga</label>
                                <input type="number" class="form-control" name="harga" value="{{ $data->harga }}">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Kategori</label>
                                <select name="kategori_id" id="" class="form-control">
                                    @foreach ($kategori as $row)
                                        <option value="{{ $row->id }}"
                                            @if ($data->id == $row->id) selected @endif>{{ $row->nama_kategori }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Gambar</label>
                                <input type="file" name="gambar" id="gambar" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
