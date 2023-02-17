@extends('layouts.app')

@section('content')
    @include('sweetalert::alert')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Data Produk') }}</div>

                    <div class="card-body">
                        <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">Tambah</a>
                        <table class="table table-bordered">
                            @php
                                $no = 1;
                            @endphp
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Deskripsi</th>
                                    <th>Kategori</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $row->nama_produk }}</td>
                                        <td>{{ $row->harga }}</td>
                                        <td>{{ $row->deskripsi }}</td>
                                        <td>{{ $row->kategori->nama_kategori }}</td>
                                        <td>
                                            <img src="{{ asset('gambar_produk/' . $row->gambar) }}" alt=""
                                                class="img-thumbnail" style="height: 50px;">
                                        </td>
                                        <td>
                                            <form action="{{ route('produk.destroy', $row->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                            <a href="{{ route('produk.edit', $row->id) }}" class="btn btn-success">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
