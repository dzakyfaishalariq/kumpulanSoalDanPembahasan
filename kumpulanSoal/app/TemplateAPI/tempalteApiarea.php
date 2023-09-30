<?php
namespace App\TemplateAPI;

class tempalteApiarea
{
    public function templatePanggil($nama_data, $data)
    {
        $template = [
            'status' => true,
            'nama_Data' => $nama_data,
            'data' => $data,
            'pembuat' => [
                'nama' => 'Dzaky Faishalariq',
                'email' => 'dzakyfaishalariq@gmail.com',
                'no_hp' => '089634104626',
            ],
        ];
        return $template;
    }
    public function errorApi()
    {
        $errorData = [
            'status' => false,
            'descripsi' => 'terjadi kesalahan',
        ];
        return $errorData;
    }
}
