@extends('layouts.plane')
@section('body')
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url ('') }}">Multi Usinas HidroCalc | Laravel</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <!-- /.dropdown  Menu a direita -->
            <!-- /.dropdown -->


            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Usuários</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configurações</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{ url ('login') }}"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                        <a href="{{ url ('') }}"><i class="fa fa-dashboard fa-fw"></i> Painel de Controle</a>
                    </li>
                    <li {{ (Request::is('*charts') ? 'class="active"' : '') }}>
                        <a href="{{ url ('charts') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Gráficos</a>
                        <!-- /.nav-second-level -->
                    </li>
                    <li {{ (Request::is('*tables') ? 'class="active"' : '') }}>
                        <a href="{{ url ('tables') }}"><i class="fa fa-table fa-fw"></i> Tabelas</a>
                    </li>
                    <li {{ (Request::is('*forms') ? 'class="active"' : '') }}>
                        <a href="{{ url ('forms') }}"><i class="fa fa-edit fa-fw"></i> Formulário</a>
                    </li>
                    <li >
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> UI UHBC<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                <a href="{{ url ('UHBC/dados_uhbc') }}">Dados UHBC</a>
                            </li>
                            <li {{ (Request::is('*buttons') ? 'class="active"' : '') }}>
                                <a href="{{ url ('UHBC/criar' ) }}">Formulário UHBC</a>
                            </li>
                            <li {{ (Request::is('*notifications') ? 'class="active"' : '') }}>
                                <a href="{{ url('UHBC/cota_uhbc') }}">Cota Volume UHBC</a>
                            </li>
                            <li {{ (Request::is('*typography') ? 'class="active"' : '') }}>
                                <a href="{{ url ('UHBC/turbinada_uhbc') }}">UHBC Vazão Turbinada</a>
                            </li>
                            <li {{ (Request::is('*icons') ? 'class="active"' : '') }}>
                                <a href="{{ url ('UHBC/vertida_uhbc') }}"> UHBC Vazão Vertida </a>
                            </li>
                            <li {{ (Request::is('*grid') ? 'class="active"' : '') }}>
                                <a href="{{ url ('UHBC/sanitaria_uhbc') }}">UHBC Vazão Sanitária</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>                                             
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">@yield('page_heading')</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">  
            @yield('section')

        </div>
        <!-- /#page-wrapper -->
    </div>
</div>
@stop

