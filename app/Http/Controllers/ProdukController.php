<?php

namespace App\Http\Controllers;

use App\models\Produks;
use Illuminate\Http\Request;
use App\Models\Kategoris;
use App\Models\Komens;
use App\Models\User;
use App\Models\Orders;
use Carbon\Carbon;

class ProdukController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Kategoris::all();
        $data = produks::all();
        return view('dataproduk', compact('data'));
    }
    public function tambahproduk()
    {
        $kategori = Kategoris::all();
        return view('tambahdata', compact('kategori'));
    }
    public function insertproduk(Request $request)
    {

        $kategori = Kategoris::all();
        $data = produks::create($request->all());
        if ($request->hasfile('gambar')) {
            $request->file('gambar')->move('gambarproduk/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('produk', compact('kategori'))->with('success', 'Data Berhasil diTambahkan');
    }
    public function tampilkanproduk($id)
    {
        $kategori = Kategoris::all();
        $data = produks::find($id);
        return view('tampilkanproduk', compact('data', 'kategori'));
    }
    public function updateproduk(Request $request, $id)
    {


        $data = produks::find($id);
        $data->update($request->all());
        if ($request->hasfile('gambar')) {
            $request->file('gambar')->move('gambarproduk/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect('produk')->with('success', 'Data Berhasil diUpdate');
    }
    public function deleteproduk($id)
    {
        $data = produks::find($id);
        $data->delete();
        return redirect('produk')->with('success', 'Data Berhasil diHapus');
    }


    public function invoice()
    {
        $data = Orders::all();
        return view('invoice', compact('data'));
    }




    public function user(){
    $data = User::all();
    return view('datauser', compact('data'));
    }


    public function detailinv($id)
    {

        $data = Orders::find($id);
        return view('detailinv', compact('data'));
    }

    public function cetakinv($id)
    {

        $data = Orders::find($id);
        return view('cetakinv', compact('data'));
    }

    public function datakomens(){
        $data = Komens::all();
        return view('datakomens', compact('data'));
    }
    public function deletekomens($id)
    {
        $data = Komens::find($id);
        $data->delete();
        return redirect('datakomens')->with('success', 'Data Berhasil diHapus');
    }


}
