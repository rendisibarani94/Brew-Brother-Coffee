<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PesanController extends Controller
{
    public function index($id)
    {
        $product = Product::where('id', $id)->first();

        return view('pesan.index', compact('product'));
    }

    public function pesan(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();

        //cek validasi
        $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        //simpan kedatabase pesanan
        if(empty($cek_pesanan))
        {
            $pesanan = new Pesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->total_harga = 0;
            $pesanan->status = 0;
            $pesanan->save();
        }
        else
        {
            $pesanan = new Pesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->total_harga = 0;
            $pesanan->status = 0;
            $pesanan->save();
        }

        //simpan kedatabase pesanan detail
        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        // dd($pesanan_baru);
        //cek pesanan detail
        $cek_pesanan_detail = PesananDetail::where('product_id', $product->id)->where('pesanan_id', $pesanan_baru->id)->first();
        if(empty($cek_pesanan_detail))
        {
            $pesanan_detail = new PesananDetail;
            $pesanan_detail->product_id = $product->id;
            $pesanan_detail->pesanan_id = $pesanan_baru->id;
            $pesanan_detail->jumlah_pesanan = $request->jumlah_pesan;
            $pesanan_detail->total_harga = $product->harga*$request->jumlah_pesan;
            $pesanan_detail->save();
        }
        else
        {
            $pesanan_detail = PesananDetail::where('product_id', $product->id)->where('pesanan_id', $pesanan_baru->id)->first();

            $pesanan_detail->jumlah_pesanan = $pesanan_detail->jumlah_pesanan+$request->jumlah_pesan;

            //harga sekarang
            $harga_pesanan_detail_baru = $product->harga*$request->jumlah_pesan;
            $pesanan_detail->total_harga = $pesanan_detail->total_harga+$harga_pesanan_detail_baru;
            $pesanan_detail->update();
        }
        //jumlah total
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan->total_harga = $pesanan->total_harga+$product->harga*$request->jumlah_pesan;
        $pesanan->update();

        return redirect('check-out');
    }

    public function check_out()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        if(!empty($pesanan))
        {
            $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
            return view('pesan.check_out', compact('pesanan', 'pesanan_details'));
        }
        return view('pesan.check_out', compact('pesanan'));
    }

    public function delete($id)
    {
        $pesanan_detail = PesananDetail::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->total_harga = $pesanan->total_harga-$pesanan_detail->total_harga;
        $pesanan->update();

        $pesanan_detail->delete();
        return Redirect('/pemesanan');
    }

    public function konfirmasi()
    {
        $user = User::where('id', Auth::user()->id)->first();
        if(empty($user->alamat))
        {
            return redirect('profile');
        }
        if(empty($user->nohp))
        {
            return redirect('profile');
        }

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan->status = 1;
        $pesanan->update();

        return redirect('info-pembayaran');
    }
}
