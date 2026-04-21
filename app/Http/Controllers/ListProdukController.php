<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProdukController extends Controller
{
    public function listProduk()
    {
        $data = [
            [
                'id' => 1,
                'produk' => 'Keyboard'
            ],
            [
                'id' => 2,
                'produk' => 'Mouse'
            ],
            [
                'id' => 3,
                'produk' => 'Monitor'
            ],
            [
                'id' => 4,
                'produk' => 'In Ear Monitor'
            ],
            [
                'id' => 5,
                'produk' => 'Speaker'
            ]
        ];
        return view('list_product', compact('data'));
    }
}
