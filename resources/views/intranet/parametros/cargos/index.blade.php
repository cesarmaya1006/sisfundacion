<!--  ============================================  -->
@extends('intranet.layout2.app')
@section('css_pagina')
@endsection
@section('tituloPagina')
<i class="fas fa-sitemap mr-3" aria-hidden="true"></i> Parametros - Cargos
@endsection
@section('subTituloPagina')
Listado de Cargos
@endsection
@section('botones_card')
@can('cargo.create')
<a href="{{ route('cargo.create') }}" class="btn btn-primary btn-xs btn-sombra text-center pl-5 pr-5 float-md-end">
    <i class="fa fa-plus-circle mr-3" aria-hidden="true"></i>
    Nuevo Registro
</a>
@endcan

@endsection
@section('cuerpoPagina')
    @can('cargo.index')
        <div class="row d-flex justify-content-md-center">
            <input type="hidden" name="titulo_tabla" id="titulo_tabla" value="Listado de Cargos">
            <input type="hidden" id="control_dataTable" value="1">
            <input type="hidden" id="cargos_edit" data_url="{{ route('cargo.edit', ['id' => 1]) }}">
            <input type="hidden" id="cargos_destroy" data_url="{{ route('cargo.destroy', ['id' => 1]) }}">
            <input type="hidden" id="cargos_todos" data_url="{{ route('cargo.getCargosTodos') }}">
            @csrf @method('delete')
            <div class="col-12 col-md-8 table-responsive">
                <table class="table table-striped table-hover table-sm tabla_data_table_xs tabla-borrando display" id="tabla_empleados">
                    <thead id="thead_empleados">
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center" >Area</th>
                            <th class="text-center" >Cargo</th>
                            <th class="text-center" ></td>
                        </tr>
                    </thead>
                    <tbody id="tbody_cargos">
                        @foreach ($areas as $area)
                            @foreach ($area->cargos as $cargo)
                                <tr>
                                    <td class="text-center">{{$cargo->id}}</td>
                                    <td>{{$cargo->area->area}}</td>
                                    <td>{{$cargo->cargo}}</td>
                                    <td class="text-center">
                                        @can('cargo.edit')
                                            <a href="{{ route('cargo.edit', ['id' => $cargo->id]) }}"
                                                class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                                <i class="fas fa-pen-square"></i>
                                            </a>
                                        @endcan
                                        @can('cargo.destroy')
                                            <form action="{{ route('cargo.destroy', ['id' => $cargo->id]) }}"
                                                class="d-inline form-eliminar" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn-accion-tabla eliminar tooltipsC"
                                                    title="Eliminar este registro">
                                                    <i class="fa fa-fw fa-trash text-danger"></i>
                                                </button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-6">
                <div class="alert alert-warning alert-dismissible mini_sombra">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Sin Acceso!</h5>
                    <p style="text-align: justify">Su usuario no tiene permisos de acceso para esta vista, Comuniquese con el
                        administrador del sistema.</p>
                </div>
            </div>
        </div>
    @endcan
@endsection
@section('modales')
@endsection
@section('script_pagina')
    @include('intranet.layout.dataTableNew')
    <script src="{{ asset('js/intranet/general/datatablesini.js') }}"></script>
    <script src="{{ asset('js/intranet/parametros/cargo/index.js') }}"></script>
@endsection
