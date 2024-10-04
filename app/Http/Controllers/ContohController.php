<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function TampilContoh()
    {
        $data = [
            'totalProduct' => 310,
            'salesToday' => 100,
            'totalRevanue' => 'Rp 50,000,000',
            'registeredUsers' => 350,
        ];
        return view ('pertemuan2', $data);
    }
}
