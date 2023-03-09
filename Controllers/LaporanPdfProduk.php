<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use PDF;
class LaporanPdfProduk extends Controller
{
    public function index(){
        $data['produk'] = Produk::all();
        $pdf = PDF::loadView('pdf.produk', $data);
        return $pdf->stream('produk.pdf');
    }
}
