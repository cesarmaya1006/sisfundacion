<!--  ============================================  -->
@extends('intranet.layout2.app')
@section('css_pagina')
@endsection
@section('tituloPagina')
    <i class="fas fa-check-square mr-3" aria-hidden="true"></i> Parametros - Empleados
@endsection
@section('subTituloPagina')
Listado de Empleados
@endsection
@section('botones_card')
    @can('empleado.create')
        <a href="{{ route('empleado.create') }}" class="btn btn-primary btn-xs btn-sombra text-center pl-5 pr-5 float-md-end">
            <i class="fa fa-plus-circle mr-3" aria-hidden="true"></i>
            Nuevo Registro
        </a>
    @endcan

@endsection
@section('cuerpoPagina')
    @can('empleado.index')
        <div class="row d-flex justify-content-md-center">
            <div class="col-12 col-md-8 table-responsive">
                <table class="table table-striped table-hover table-sm tabla_data_table_xs tabla-borrando display" id="tabla_empleados">
                    <thead id="thead_empleados">
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Area</th>
                            <th class="text-center">Cargo</th>
                            <th class="text-center">Identificación</th>
                            <th class="text-center">Nombres y Apellidos</th>
                            <th class="text-center">Correo Electrónico</th>
                            <th class="text-center">Teléfono</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center"></td>
                        </tr>
                    </thead>
                    <tbody id="tbody_empleados">
                        @foreach ($areas as $area)
                            @foreach ($area->cargos as $cargo)
                                @foreach ($cargo->empleados as $empleado)
                                    <tr>
                                        <td>{{$empleado->id}}</td>
                                        <td>{{$empleado->cargo->area->area}}</td>
                                        <td>{{$empleado->cargo->cargo}}</td>
                                        <td>{{$empleado->tipo_docu->abreb_id . '  ' . $empleado->identificacion}}</td>
                                        <td>{{$empleado->nombres . '  ' . $empleado->apellidos}}</td>
                                        <td>{{$empleado->usuario->email}}</td>
                                        <td>{{$empleado->telefono}}</td>
                                        <td class="text-center">
                                            <span class="badge bg-{{ $empleado->estado == 1 ? 'success' : 'danger' }}">{{ $empleado->estado == 1 ? 'Activo' : 'Inactivo' }}</span>
                                        </td>
                                        <td>
                                            @can('empleado.edit')
                                                <a href="{{ route('empleado.edit', ['id' => $empleado->id]) }}" class="btn btn-sm btn-icon btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-original-title="Edit" aria-label="Edit" data-bs-original-title="Editar">
                                                    <span class="btn-inner">
                                                    <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    </span>
                                                </a>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        @can('empleado.edit')
            <input type="hidden" id="permiso_empleados_edit" value="1" data_url="{{route('empleado.edit',['id'=>1])}}">
        @else
            <input type="hidden" id="permiso_empleados_edit" value="0" data_url="{{route('empleado.edit',['id'=>1])}}">
        @endcan

        @can('empleado.activar')
            <input type="hidden" id="permiso_empleados_activar" value="1" data_url="{{route('empleado.activar',['id'=>1])}}">
        @else
            <input type="hidden" id="permiso_empleados_activar" value="0" data_url="{{route('empleado.activar',['id'=>1])}}">
        @endcan
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
    <script src="{{ asset('js/intranet/parametros/empleados/index.js') }}"></script>
@endsection
