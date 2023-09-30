<?php

namespace App\Http\Controllers;

use App\Models\TingkatSoal;

class TingkatSoalConttroler extends Controller
{
    // todo memanggil data
    public function index()
    {
        $data = new TingkatSoal();
        return response()->json([
            'nama_Data' => 'Tingkat Soal',
            'data' => $data::orderBy('created_at', 'asc')->get(),
            'pembuat' => [
                'nama' => 'Dzaky Faishalariq',
                'email' => 'dzakyfaishalariq@gmail.com',
                'no_hp' => '089634104626',
            ],
        ], 200);
    }
}
