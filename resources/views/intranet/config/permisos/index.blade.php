<!--  ============================================  -->
@extends('intranet.layout2.app')
@section('css_pagina')
<link rel="stylesheet" href="{{ asset('css/intranet/menu/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/intranet/menu/menu_nestable.css') }}">
@endsection
@section('tituloPagina')
<i class="fas fa-check-square mr-3" aria-hidden="true"></i> Configuración Permisos
@endsection
@section('subTituloPagina')
Listado de Permisos
@endsection
@section('botones_card')
<a href="{{ route('rol.create') }}" class="btn btn-info btn-xs btn-sombra text-center pl-5 pr-5 float-md-end">
    <i class="fa fa-plus-circle mr-3" aria-hidden="true"></i>
    Nuevo Permiso
</a>
@endsection
@section('breadcrumb')
@endsection
@section('cuerpoPagina')
<div class="row d-flex justify-content-md-center">
    <div class="col-12 col-md-6 table-responsive">
        <table class="table table-striped table-hover table-sm tabla_data_table tabla-borrando display" id="tabla-data">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Permiso / Ruta</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permisos as $permiso)
                    <tr>
                        <td>{{ $permiso->id }}</td>
                        <td>{{ $permiso->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('modales')

@endsection
@section('script_pagina')
@include('intranet.layout.dataTableNew')
    <script src="{{ asset('js/intranet/general/datatablesini.js') }}"></script>
@endsection
