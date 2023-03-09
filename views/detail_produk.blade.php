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
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="" class="mb-2">QTY</label>
                                    <input type="number" name="qty" id="qty" class="form-control" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="" target="_blank" class="btn btn-success mt-3" id="btn_beli" onclick="wa()">Beli Sekarang</a>
                        <script>
                            function wa(){

                                const qty = $('#qty').val();
                                const btn_beli = $('#btn_beli').val();
                                const total_beli = parseInt(qty) * parseInt({{ $data->harga }});
                                const url =  "https://api.whatsapp.com/send?phone=6283153444251&text=Hallo kak saya mau pesan {{ $data->nama_produk}} dengan qty = "+ qty+"dengan total harga : Rp. "+ total_beli +";";
                                $('#btn_beli').attr('href',url);
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
