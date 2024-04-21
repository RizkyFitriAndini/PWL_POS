<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Http\Requests\StorePostRequest;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }
    public function create()
    {
        return view('kategori.create');
    }
    public function store(StorePostRequest $request): RedirectResponse
    {
        // KategoriModel::create([
        //     'kategori_kode' => $request->kodeKategori,
        //     'kategori_nama' => $request->namaKategori,
        // ]);
        $validated = $request->validated();
        $validated = $request->safe()->only(['kategori_kode','kategori_nama']);
        $validated = $request->safe()->except(['kategori_kode','kategori_nama']);
        
        return redirect('/kategori');
    }
    public function ubah($id)
    {
        $kategori = KategoriModel::find($id);
        return view('/kategori/edit', ['data' => $kategori]);
    }
    public function ubah_simpan($id, Request $request)
    {
        KategoriModel::find($id)->update([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori
        ]);
        return redirect('/kategori');
    }
    public function hapus($id)
    {
        $kategori = KategoriModel::find($id);
        $kategori->delete();

        return redirect('/kategori');
    }

}
