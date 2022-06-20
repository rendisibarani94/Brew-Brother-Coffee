<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DibeliController extends Controller
{
    public function index()
    {
        $menus = Pesanan::where('status', '=', '1')->with('user')->get();
        return view('dibeli.index', compact('menus'));
    }

    public function delete($id)
    {
        $menus = Pesanan::where('id', $id);
        $menus->delete();
        return redirect('dibeli');
    }

}
