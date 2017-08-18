<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PrototipoController extends Controller {

    public function index() {
        return view('prototipo.index');
    }

    public function uhbc_aba() {
        
        return view('prototipo.503');
    }

    public function uhbc_leitura() {
        return view('prototipo.calculados_UHBC');
    }

    public function uhbc_formulario() {
        return view('prototipo.form_UHBC');
    }

    public function uhbc_grafico() {
        return view('prototipo.graficos');
    }

}
