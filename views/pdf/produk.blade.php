<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<h1 class="text-center">Laporan List Data Produk</h1>
    <table class="table table-bordered" border="1" id="example23" align="center">
        @php
            $no = 1;
        @endphp
        <thead>
            <tr>
                <th style="background-color: #dddd">No</th>
                <th style="background-color: #dddd">Nama Produk</th>
                <th style="background-color: #dddd">Harga</th>
                <th style="background-color: #dddd">Deskripsi</th>
                <th style="background-color: #dddd">Kategori</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($produk as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->nama_produk }}</td>
                    <td>Rp. {{ number_format($row->harga) }};</td>
                    <td>{{ $row->deskripsi }}</td>
                    <td>{{ $row->kategori->nama_kategori }}</td>

                </tr>
            @endforeach
        </tbody>

    </table>
