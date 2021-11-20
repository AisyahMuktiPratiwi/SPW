<?php

namespace App\Http\Controllers;

use App\models\Kategoris;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data = kategoris::all();
        return view('datakategori', compact('data'));
    }
    public function tambahkategori()
    {
        return view('tambahkategori');
    }
    public function insertkategori(Request $request)
    {
        $data = kategoris::create($request->all());
        $data->save();

        return redirect()->route('kategori')->with('success', 'Data Berhasil diTambahkan');
    }
    public function tampilkankategori($id)
    {
        $data = kategoris::find($id);
        return view('tampilkankategori', compact('data'));
    }
    public function updatekategori(Request $request, $id)
    {
        $data = kategoris::find($id);
        $data->update($request->all());
        $data->save();

        return redirect('kategori')->with('success', 'Data Berhasil diUpdate');
    }
    public function deletekategori($id)
    {
        $data = kategoris::find($id);
        $data->delete();
        return redirect('kategori')->with('success', 'Data Berhasil diHapus');
    }

}
