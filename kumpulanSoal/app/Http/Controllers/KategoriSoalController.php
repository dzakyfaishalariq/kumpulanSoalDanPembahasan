<?php

namespace App\Http\Controllers;

use App\Models\KategoriSoal;
use App\TemplateAPI\tempalteApiarea;

class KategoriSoalController extends Controller
{
    private $templateAPI;
    public function __construct(tempalteApiarea $templateAPI)
    {
        $this->templateAPI = $templateAPI;
    }
    // todo : Memanggil data
    public function index()
    {
        $data = new KategoriSoal();
        $data = $data::orderBy('id', 'desc')
            ->select('id', 'kategoriSoal', 'descripsi')
            ->get();
        $dataAPI = $this->templateAPI->templatePanggil('Kategori Soal', $data);
        if (!$data) {
            $dataAPI = $this->templateAPI->errorApi();
            return response()->json($$dataAPI, 401);
        }
        return response()->json($dataAPI, 200);
    }
}
