@extends('layouts.appAdmin')

@section('content')
    @include('sweetalert::alert')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> 
                        <div class="btn-group pull-right">

                            <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3 pull-right"> <i class="ti-save"></i> Tambah Data</a>
                            <a href="{{ route('pdf.produk') }}" class="btn btn-success mb-3 pull-right"> <i class="ti-copy"></i>Print PDF</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example23">
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
                                            <td>Rp. {{ number_format($row->harga) }};</td>
                                            <td>{{ $row->deskripsi }}</td>
                                            <td>{{ $row->kategori->nama_kategori }}</td>
                                            <td>
                                                <img src="{{ asset('gambar_produk/' . $row->gambar) }}" alt=""
                                                    class="img-thumbnail" style="height: 50px;">
                                            </td>
                                            <td>
                                                <div class="btn-group">

                                                    <form action="{{ route('produk.destroy', $row->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"> <i class="ti-trash"></i> </button>
                                                    </form>
                                                    <a href="{{ route('produk.edit', $row->id) }}" class="btn btn-success"> <i class="ti-pencil"></i> </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
    
                            </table>
                        </div>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
@endsection
