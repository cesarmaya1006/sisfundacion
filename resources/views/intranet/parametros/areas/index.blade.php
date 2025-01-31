<!--  ============================================  -->
@extends('intranet.layout2.app')
@section('css_pagina')
@endsection
@section('tituloPagina')
<i class="fas fa-check-square mr-3" aria-hidden="true"></i> Parametros - Áreas
@endsection
@section('subTituloPagina')
Listado de Áreas
@endsection
@section('botones_card')
<a href="{{ route('area.create') }}" class="btn btn-primary btn-xs btn-sombra text-center pl-5 pr-5 float-md-end">
    <i class="fa fa-plus-circle mr-3" aria-hidden="true"></i>
    Nuevo Registro
</a>
@endsection
@section('cuerpoPagina')
    @can('area.index')
    <div class="row d-flex justify-content-md-center">
        <div class="col-12 table-responsive">
            <table class="table table-striped table-hover table-sm tabla_data_table_xs tabla-borrando display" id="tabla-data">
                <thead>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Area</th>
                        <th class="text-center">Area Superior</th>
                        <th class="text-center">Dependencias</th>
                        <td></td>
                    </tr>
                </thead>
                <tbody id="tbody_areas">
                    @foreach ($areas as $area)
                        <tr>
                            <td class="text-center">{{ $area->id }}</td>
                            <td style="white-space:nowrap;">{{ $area->area }}</td>
                            <td class="text-center">{{ $area->area_id ? $area->area_sup->area : '---' }}</td>
                            <td class="text-center">
                                @if ($area->areas->count() > 0)
                                    <button type="submit"
                                        class="btn-accion-tabla tooltipsC mostrar_dependencias text-info"
                                        onClick="mostrarModal('{{ route('areas.getDependencias', ['id' => $area->id]) }}')"
                                        title="Mostrar Dependencias" data_id ="{{ $area->id }}"
                                        data_url = "{{ route('areas.getDependencias', ['id' => $area->id]) }}">
                                        {{ $area->areas->count() }}
                                    </button>
                                @else
                                    <h6 class="text-danger">---</h6>
                                @endif
                            </td>
                            <td class="d-flex justify-content-evenly align-items-center">
                                @can('area.edit')
                                    <a href="{{ route('area.edit', ['id' => $area->id]) }}"
                                        class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fas fa-pen-square"></i>
                                    </a>
                                @endcan
                                @can('area.destroy')
                                    <form action="{{ route('area.destroy', ['id' => $area->id]) }}"
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
@endsection
