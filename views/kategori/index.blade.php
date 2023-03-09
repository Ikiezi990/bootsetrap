@extends('layouts.appAdmin')

@section('content')
@include('sweetalert::alert')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-2 pull-right"> <i class="ti-save"></i> Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($kategori as $row)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $row->nama_kategori }}</td>
                                    <td>
                                        <div class="btn-group">

                                            <form action="{{ route('kategori.destroy', $row->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"> <i class="ti-trash"></i> </button>
                                            </form>
                                            <a href="{{ route('kategori.edit', $row->id) }}" class="btn btn-success"> <i class="ti-pencil"></i> 
                                            </a>
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
