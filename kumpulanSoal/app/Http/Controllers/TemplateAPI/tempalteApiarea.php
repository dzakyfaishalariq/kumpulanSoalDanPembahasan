<?php

class templateApiarea
{
    public function templatePanggil($nama_data, $data)
    {
        $template = [
            'nama_Data' => $nama_data,
            'data' => $data::orderBy('created_at', 'asc')->get(),
            'pembuat' => [
                'nama' => 'Dzaky Faishalariq',
                'email' => 'dzakyfaishalariq@gmail.com',
                'no_hp' => '089634104626',
            ],
        ];
        return $template;
    }
}
