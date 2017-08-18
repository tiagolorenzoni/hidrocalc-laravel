<?php

namespace App\Http\Controllers;

use App\Vazao_turbinada_uhbc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class Vazao_turbinada_uhbcController extends Controller {

    public function index() {
        $vazao_turbinada_uhbcs = Vazao_turbinada_uhbc::orderBy('queda_bruta_bc', 'asc')->paginate(10);
        return view('hidro_uhbc.turbinada', ['vazao_turbinada_uhbcs' => $vazao_turbinada_uhbcs]);
    }

}
