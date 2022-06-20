<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pemesanan.index', compact('products'));
    }

    public function menu()
    {
        $products = Product::all();
        return view('admin.indexadmin', compact('products'));
    }
}
