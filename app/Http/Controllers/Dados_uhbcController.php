<?php

namespace App\Http\Controllers;

use App\Dados_uhbc;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dados_uhbcRequest;
use App\Utils\Uhbc;

class Dados_uhbcController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all() {
        $cont = Dados_uhbc::count();
        $dados_uhbcs = Dados_uhbc::orderBy('data_bc', 'desc')->orderBy('hora_bc', 'desc')->paginate($cont);
        return view('hidro_uhbc.dados', ['dados_uhbcs' => $dados_uhbcs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('hidro_uhbc.form_uhbc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Dados_uhbcRequest $request) {

        //Validate the request ...

        $input = $request->all();

        $dados = new Dados_uhbc;
        $dados->data_bc = $request->data_bc;
        $dados->hora_bc = $request->hora_bc;
        $dados->nivel_montante_bc = $request->nivel_montante_bc;
        $dados->nivel_jusante_bc = $request->nivel_jusante_bc;
        $dados->geracao_ug1_bc = $request->geracao_ug1_bc;
        $dados->estadoug1_bc = $request->estadoug1_bc;
        $dados->geracao_ug2_bc = $request->geracao_ug2_bc;
        $dados->estadoug2_bc = $request->estadoug2_bc;
        $dados->hora_cheia_bc = Uhbc::busca_ftp_uhbc();
        $dados->save();

        return redirect('UHBC/dados_uhbc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        $mensagem = 'Produto excluído com sucesso.';
        return view('mensagem', ['mensagem' => $mensagem]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $id = $id;
        $dados = Dados_uhbc::find($id);
        return view('hidro_uhbc.form_uhbc_edita', compact('dados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Dados_uhbcRequest $request) {
        //Validate the request ...     
        $dados = Dados_uhbc::find($id);
        $dados->data_bc = $request->data_bc;
        $dados->hora_bc = $request->hora_bc;
        $dados->nivel_montante_bc = $request->nivel_montante_bc;
        $dados->nivel_jusante_bc = $request->nivel_jusante_bc;
        $dados->geracao_ug1_bc = $request->geracao_ug1_bc;
        $dados->estadoug1_bc = $request->estadoug1_bc;
        $dados->geracao_ug2_bc = $request->geracao_ug2_bc;
        $dados->estadoug2_bc = $request->estadoug2_bc;
        $dados->save();

        return redirect('UHBC/dados_uhbc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Dados_uhbc::find($id)->delete();
        return redirect('UHBC/dados_uhbc');
    }


}
