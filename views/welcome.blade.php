@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($produk as $row)
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('gambar_produk/' . $row->gambar) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->nama_produk }}</h5>
                            <div class="paragraph" style="max-height: 80px;overflow: hidden;">

                                <p class="card-text">{{ $row->deskripsi }}</p>
                            </div>
                            <a href="{{ route('detailproduk', $row->id) }}" class="btn btn-primary">Detail Produk</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
