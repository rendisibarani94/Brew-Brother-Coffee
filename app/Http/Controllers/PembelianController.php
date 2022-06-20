<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesananDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PembelianController extends Controller
{
    public function index()
    {
        $menus = PesananDetail::with('product')->with('pesanan')->get();
        return view('pembelian.index', compact('menus'));
    }

    public function delete($id)
    {
        $menus = PesananDetail::where('id', $id);
        $menus->delete();
        return redirect('pembelian');
    }
}
