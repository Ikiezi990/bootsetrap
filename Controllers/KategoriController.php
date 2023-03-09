<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Produk;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "Data Kategori";
        $data['kategori'] = Kategori::all();
        return view('kategori.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Tambah Data Kategori";
        return view('kategori.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|max:50',
        ]);
        $data = [
            'nama_kategori' => $request->nama_kategori,
        ];
        Kategori::insert($data);
        alert()->success('sukses' , 'Data kategori berhasil di simpan !');
        return redirect(route('kategori.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = "Update Data Kategori";
        $data['data'] = Kategori::where('id', $id)->first();
        return view('kategori.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|max:50',
        ]);
        $data = [
            'nama_kategori' => $request->nama_kategori,
        ];
        Kategori::where('id', $id)->update($data);
        alert()->success('sukses' , 'Data kategori berhasil di Edit !');
        return redirect(route('kategori.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Produk::where('kategori_id', $id)->count() <= 0) {
            Kategori::where('id', $id)->delete();
            alert()->success('sukses' , 'Data kategori berhasil di hapus !');
            return redirect(route('kategori.index'));
        }else{
            alert()->error('error' , 'Data tidak bisa di hapus ! sudah di pakai di produk');
            return redirect(route('kategori.index'));
        }
    }
}
