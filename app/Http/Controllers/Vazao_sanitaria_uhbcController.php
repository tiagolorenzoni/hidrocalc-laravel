<?php

namespace App\Http\Controllers;

use App\Vazao_sanitaria_uhbc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class Vazao_sanitaria_uhbcController extends Controller {

    public function index() {
        $sanitarias = Vazao_sanitaria_uhbc::all();
        return view('hidro_uhbc.sanitaria', ['sanitarias' => $sanitarias]);
    }

}
