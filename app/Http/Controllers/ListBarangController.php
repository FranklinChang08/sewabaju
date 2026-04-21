<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController extends Controller
{
    public function getData()
    {
        $dataBarang = [
            [
                'id' => 1,
                'nama' => 'Laptop',
                'harga' => 6000000,
            ],
            [
                'id' => 2,
                'nama' => 'Monitor',
                'harga' => 1000000,
            ],
            [
                'id' => 3,
                'nama' => 'Mouse',
                'harga' => 120000,
            ],
            [
                'id' => 4,
                'nama' => 'Speaker',
                'harga' => 200000,
            ],
            [
                'id' => 5,
                'nama' => 'Keyboard',
                'harga' => 600000,
            ],
        ];
        return $dataBarang;
    }
    public function tampilkan()
    {
        $data = $this->getData();
        return view('list_barang', compact('data'));
    }
}
