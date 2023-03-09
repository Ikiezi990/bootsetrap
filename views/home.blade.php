@extends('layouts.appAdmin')

@section('content')

    <div class="row">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase text-center">Produk</h5>
                    <center>
                        <i class="ti-archive text-success " style="font-size: 50px;margin:auto;"></i>
                    </center>
                        <h2 class="text-center mt-3">
                        <div class="alert alert-success">
                            {{ $produk }}
                        </div>
                        </h2>
                    </div>
                </div>
            </div>
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase text-center">Kategori</h5>
                    <center>
                        <i class="ti-pin-alt text-success " style="font-size: 50px;margin:auto;"></i>
                    </center>
                        <h2 class="text-center mt-3">
                        <div class="alert alert-success">
                            {{ $kategori }}
                        </div>
                        </h2>
                    </div>
                </div>
            </div>

    </div>


@endsection
