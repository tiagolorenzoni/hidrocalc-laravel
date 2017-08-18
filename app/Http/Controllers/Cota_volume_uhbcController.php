<?php

namespace App\Http\Controllers;

use App\Cota_volume_uhbc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cota_uhbcRequest;


class Cota_volume_uhbcController extends Controller {

    public function index() {
        $cota_volume_uhbcs = Cota_volume_uhbc::orderBy('cota_bc', 'asc')->paginate(10);
        return view('hidro_uhbc.cota', ['cota_volume_uhbcs' => $cota_volume_uhbcs]);
    }

    public function create() {
        return view('hidro_uhbc.create');
    }

    public function buscar(Cota_uhbcRequest $request) {
        $cota_volume_uhbcs = Cota_volume_uhbc::where('cota_bc',  $request->input('busca') )->paginate(5);
        return view('hidro_uhbc.cota', ['cota_volume_uhbcs' => $cota_volume_uhbcs]);
    }

}
