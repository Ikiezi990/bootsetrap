@extends('layouts.appAdmin')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-uppercase">Masukan Detail Kategori</h5>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form action="{{ route('kategori.store') }}" method="post" class="form-material">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori">
                    </div>

            </div>
            <div class="card-footer">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary mt-2 pull-right"> <i class="ti-save"></i> Simpan</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
