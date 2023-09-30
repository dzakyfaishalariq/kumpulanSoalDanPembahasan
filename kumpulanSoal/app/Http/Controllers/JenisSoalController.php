<?php

namespace App\Http\Controllers;

use App\Models\JenisSoal;
use App\TemplateAPI\tempalteApiarea;

class JenisSoalController extends Controller
{
    private $templateAPI;
    public function __construct(tempalteApiarea $templateAPI)
    {
        $this->templateAPI = $templateAPI;
    }
    // todo : Memanggil data
    public function index()
    {
        $data = new JenisSoal();
        $data = $data::orderBy('id', 'desc')
            ->select('id', 'jenisSoal', 'descripsi')
            ->get();
        $dataAPI = $this->templateAPI->templatePanggil('Jenis Soal', $data);
        if (!$data) {
            $dataAPI = $this->templateAPI->errorApi();
            return response()->json($$dataAPI, 401);
        }
        return response()->json($dataAPI, 200);
    }

}
