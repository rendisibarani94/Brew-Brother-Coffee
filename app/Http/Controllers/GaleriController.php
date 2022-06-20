<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    public function index(){
        $galeris = Event::get();
        return view('galeri.index', compact('galeris'));
    }
}
