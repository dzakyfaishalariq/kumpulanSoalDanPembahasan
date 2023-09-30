<?php

namespace App\Http\Controllers;

use App\Models\TingkatSoal;
use App\TemplateAPI\tempalteApiarea;

class TingkatSoalConttroler extends Controller
{
    private $templateAPI;
    public function __construct(tempalteApiarea $templateAPI)
    {
        $this->templateAPI = $templateAPI;
    }
    // todo memanggil data
    public function index()
    {
        $data = new TingkatSoal();
        $data = $data::orderBy('id', 'desc')
            ->select('id', 'tingkatSoal', 'descripsi')
            ->get();
        $dataAPI = $this->templateAPI->templatePanggil('Tingkat Soal', $data);
        if (!$data) {
            $dataAPI = $this->templateAPI->errorApi();
            return response()->json($$dataAPI, 401);
        }
        return response()->json($dataAPI, 200);
    }
}
