<?php

namespace App\Http\Controllers;

use App\models\Produks;
use App\models\User;

use App\models\Orders;
use App\Models\Komens;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $jumlahproduk = Produks::count();
        $jumlahpesanan = Orders::count();
        $jumlahuser = User::count();
        return view('dashboardadmin', compact('jumlahproduk', 'jumlahpesanan','jumlahuser'));
    }

    public function checkout()
    {

        $tanggal = Carbon::now()->format('Y-m-d');
        $now = Carbon::now();
        $thnBulanTanggal = $now->year . $now->month . $now->day;
        $cek = Orders::count();
        if ($cek == 0) {
            $urut = 001;
            $nomer = 'INV' . $thnBulanTanggal . $urut;
        } else {
            $ambil = Orders::all()->last();
            $urut = (int)substr($ambil->kodeunik, 1) + 1;
            $nomer = 'INV' . $thnBulanTanggal . $urut;
        }
        return view('checkout', compact('tanggal', 'nomer'));
    }
    public function pembayaran(Request $request)
    {

        $data = Orders::create($request->all());
        if ($request->hasfile('bukti')) {
            $request->file('bukti')->move('buktiproduk/', $request->file('bukti')->getClientOriginalName());
            $data->bukti = $request->file('bukti')->getClientOriginalName();
            $data->save();
        }
        $tanggal = Carbon::now()->format('Y-m-d');
        $now = Carbon::now();
        $thnBulanTanggal = $now->year . $now->month . $now->day;
        $cek = Orders::count();
        if ($cek == 0) {
            $urut = 001;
            $nomer = 'INV' . $thnBulanTanggal . $urut;
        } else {
            $ambil = Orders::all()->last();
            $urut = (int)substr($ambil->kodeunik, -3) + 1;
            $nomer = 'INV' . $thnBulanTanggal . $urut;
        }

        return redirect()->route('pesan', compact('tanggal','nomer'))->with('success', ' Terimakasih Telah Melakukan Pemesanan, Pesanan Anda Sedang Diproses');;
    }
    public function pesan()
    {


        return view('pesan', );
    }
    public function tambahkomen()
    {
        $tanggal = Carbon::now()->format('Y-m-d');
        $now = Carbon::now();
        $thnBulanTanggal = $now->year . $now->month . $now->day;
        $produk = Produks::all();
        return view('tambahkomen', compact('produk','tanggal'));
    }
    public function insertkomen(Request $request)
    {
        $tanggal = Carbon::now()->format('Y-m-d');
        $now = Carbon::now();
        $thnBulanTanggal = $now->year . $now->month . $now->day;
        $data = Komens::create($request->all());
        $produk = Produks::all();
        if ($request->hasfile('gmbrkomen')) {
            $request->file('gmbrkomen')->move('gmbrkomen/', $request->file('gmbrkomen')->getClientOriginalName());
            $data->gmbrkomen = $request->file('gmbrkomen')->getClientOriginalName();
            $data->save();

        return redirect()->route('about', compact('data','produk','tanggal'))->with('success', 'Komentar berhasil dikirimkan');
    }
}
}
