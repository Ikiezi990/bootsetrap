@extends('layouts.appAdmin')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="card">
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
                <h5 class="card-title text-uppercase">Masukan Detail Kategori</h5>
                <form action="{{ route('kategori.update', $data->id) }}" method="post" class="form-material">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" value="{{ $data->nama_kategori }}">
                    </div>

            </div>
            <div class="card-footer">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary mt-2 pull-right"> <i class="ti-save"></i> Update</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
