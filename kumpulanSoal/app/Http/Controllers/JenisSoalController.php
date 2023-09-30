<?php

namespace App\Http\Controllers;

use App\Models\JenisSoal;
use templateApiarea;

class JenisSoalController extends Controller
{
    // todo : Memanggil data
    public function index()
    {
        include_once app_path('templateAPI/tempalteApiarea.php');
        $templateApi = new templateApiarea;
        $data = new JenisSoal();
        $dataAPI = $templateApi->templatePanggil('Jenis Soal', $data);
        return response()->json($dataAPI, 200);
    }

}
