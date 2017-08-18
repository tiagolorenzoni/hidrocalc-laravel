<?php

namespace App\Http\Controllers;
use App\Vazao_vertida_uhbc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
class Vazao_vertida_uhbcController extends Controller
{
    public function index()
    {
        $vazao_vertida_uhbcs = Vazao_vertida_uhbc::orderBy('nivel_reservatorio_bc', 'asc')->paginate(10);
        return view('hidro_uhbc.vertida', ['vazao_vertida_uhbcs' => $vazao_vertida_uhbcs]);
    }
    
    public function todos() {
        
        $vazao_vertida_uhbcs = Vazao_vertida_uhbc::all();
        return view ('hidro_uhbc.vertida',['vazao_vertida_uhbcs'=>$vazao_vertida_uhbcs]);
        
        
        
    }
    
    
    
}
