@extends('intranet.layout.app')

@section('css_pagina')
@endsection

@section('tituloPagina')
    <i class="fas fa-check-square mr-3" aria-hidden="true"></i> Parametros - Usuarios - Crear
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('empleado.index') }}">Usuario</a></li>
    <li class="breadcrumb-item active">Crear</li>
@endsection

@section('titulo_card')
    Crear Usuario
@endsection

@section('botones_card')
    <a href="{{ route('usuario.index') }}"
       class="btn btn-success btn-xs btn-sombra text-center pl-5 pr-5 float-md-end"
       style="font-size: 0.8em;">
        <i class="fas fa-reply mr-2"></i>
        Volver
    </a>
@endsection

@section('cuerpoPagina')
    <div class="row d-flex justify-content-center">
        <form class="col-12  form-horizontal" action="{{ route('usuario.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            @method('post')
            @include('intranet.parametros.usuarios.form')
            <div class="row mt-5">
                <div class="col-12 col-md-9 mb-4 mb-md-0 d-grid gap-2 d-md-block ">
                    <button type="submit" class="btn btn-primary btn-sm btn-sombra pl-sm-5 pr-sm-5"
                        style="font-size: 0.8em;">Guardar</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('footer_card')
@endsection

@section('modales')
@endsection

@section('script_pagina')
<script src="{{ asset('js/intranet/regionales/usuario/crear.js') }}"></script>
@endsection
