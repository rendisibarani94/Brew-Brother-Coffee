<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


class EventController extends Controller
{
    public function index(){
        return view('event.index');
    }
    public function store(Request $request){
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required',
            'gambar.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:5120'
        ]);

        $file = $request->file('gambar');
       $namaFile = $file->getClientOriginalName();
       $tujuanFile = 'assets';

       $file->move($tujuanFile, $namaFile);


        $Event = new Event;
        $Event->deskripsi = $request->deskripsi;
        $Event->gambar = $namaFile;

        $Event->save();
        return redirect("event")->with('success', 'Galeri Berhasil Ditembahkan');
    }

    
}
