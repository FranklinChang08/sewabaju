<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $data = [
        //     'nama' => 'Franklin Sebastian Felix',
        //     'pekerjaan' => 'Developer',
        // ];
        $nama = "Daniel Anju";
        $pekerjaan = "programmer";
        return view('home', compact('nama', 'pekerjaan'));
    }
    public function contact()
    {
        return view('contact');
    }
}
