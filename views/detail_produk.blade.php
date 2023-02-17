@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="card-title">{{ $data->nama_produk }} </h3>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('gambar_produk/' . $data->gambar) }}" alt="" srcset=""
                            class="img-thumbnail">
                    </div>

                    <div class="col-md-8">
                        <h3 class="card-title">
                            Deskripsi Produk
                        </h3>
                        <br>

                        <p style="text-align: left">
                            {{ $data->deskripsi }}
                        </p>
                        <span class="badge bg-danger">Kategori : {{ $data->kategori->nama_kategori }}
                        </span>
                        <br>
                        <span class="badge bg-primary">Rp. {{ number_format($data->harga) }} ;
                        </span>
                        <br>
                        <a href="" class="btn btn-success mt-3">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
