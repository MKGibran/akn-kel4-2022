<?php

namespace App\Controllers;

class C_Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'AKN Kelompok 4'
        ];
        return view('content/V_WelcomeMessage', $data);
    }
}
