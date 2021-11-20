<?php

namespace App\Http\Controllers;

use App\models\Produks;
use App\Models\Kategoris;
use App\Models\Komens;
use App\models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = produks::all();
        $kategori = Kategoris::all();
        return view('depan', compact('data', 'kategori'));
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $data = Produks::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('depan', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function detail($id)
    {
        $data = produks::find($id);
        return view('detail', compact('data'));
    }


    public function cart()
    {
        return view('cart');
    }
    public function addToCart($id)
    {
        $produks = Produks::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "nama" => $produks->nama,
                "quantity" => 1,
                "harga" => $produks->harga,
                "gambar" => $produks->gambar
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Produk Berhasil Ditambahkan Ke Keranjang!');
    }
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Keranjang Berhasil Terupdate');
        }
    }
    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Produk berhasil Di Hapus');
        }
    }
    public function about(){

        $data = Komens::all();

        return view('about', compact('data'));
    }

}
