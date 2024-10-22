<?php

namespace App\Http\Controllers;

use App\Models\hatamanModel;
use Illuminate\Http\Request;

class Hataman extends Controller
{
    public function index()
    {
        $hatam = new hatamanModel();
        $data = [
            'hatam' => $hatam->get(),
        ];
        return view('1/index', $data);
    }

    public function tambah()
    {
        dd('ok');
    }
}
