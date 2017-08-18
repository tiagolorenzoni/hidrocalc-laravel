@extends ('layouts.dashboard')
@section('page_heading','PCH Barra do Rio Chapéu')

@section('section')
<div class="container-fluid">
    <div class="panel panel-default">
        @if ($errors->any()) 
        <ul class="alert alert-warning"> 
            @foreach($errors->all() as $error) 
            <li>{{ $error }}</li> 
            @endforeach  </ul>
        @endif
        <div class="panel-body">           
            <form method="post" action="inserir">
                <div class="panel-body">
                    <input class="btn btn-default btn-lg " type="submit" name="submit" value="Salvar">
                </div>

                <!--Inicio Formulário --> 
                <div class="row">
                    <div class="col-sm-3">
                        <!--Data e Hora-->                       
                        <div >
                            <div class="form-group">
                                <label>Data:</label>
                                <input type="text" name="data_bc" placeholder="2017-06-20" size="10">
                                {{ csrf_field() }}
                            </div>
                            <div class="form-group">
                                <label >Hora:</label>
                                <input type="text" name ="hora_bc"  placeholder="16:00" size="10">
                            </div>
                        </div> 
                    </div>                                                                
                    <!--Níveis -->
                    <div class="col-sm-3" >
                        <div class="form-group">
                            <label>Nível Montante(m):</label>
                            <input type="text" name="nivel_montante_bc" placeholder="195.0" size="10" />
                        </div>
                        <div class="form-group">
                            <label>Nível Jusante (m):</label>
                            <input type="text" name="nivel_jusante_bc" placeholder="132.0" size="10" />
                        </div>
                    </div>                                                              
                    <!--Geração -->
                    <div class="col-sm-3">
                        <div >
                            <div class="form-group">
                                <label>Geração UG1 MWh:</label>
                                <input type="text" name="geracao_ug1_bc" placeholder="7,50" size="10"/>
                            </div>
                            <div class="form-group">                           
                                <label>Estado UG1:</label>
                                <select name="estadoug1_bc">
                                    <option>G</option>
                                    <option>P</option>
                                    <option>S</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div >
                            <div class="form-group">
                                <label>Geração UG2 MWh:</label>
                                <input type="text" name="geracao_ug2_bc" placeholder="7,5" size="10" />
                            </div>
                            <div class="form-group">
                                <label>Estado UG2:</label>
                                <select name="estadoug2_bc">                                   
                                    <option>G</option>
                                    <option>P</option>
                                    <option>S</option>
                                </select>
                            </div> 
                        </div> 
                    </div>
                </div> 
            </form>
        </div>
    </div>
</div>
@stop