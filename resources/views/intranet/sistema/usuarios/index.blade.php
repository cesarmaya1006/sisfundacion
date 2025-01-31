<!--  ============================================  -->
@extends('intranet.layout2.app')
@section('css_pagina')
@endsection
@section('tituloPagina')
    <i class="fas fa-check-square mr-3" aria-hidden="true"></i> Parametros - Usuarios
@endsection
@section('subTituloPagina')
    Listado de Usuarios
@endsection
@section('botones_card')
<a href="{{ route('usuario.create') }}" class="btn btn-primary btn-xs btn-sombra text-center pl-5 pr-5 float-md-end">
    <i class="fa fa-plus-circle mr-3" aria-hidden="true"></i>
    Nuevo Registro
</a>
@endsection
@section('cuerpoPagina')
    @can('usuario.index')
        @foreach ($roles as $rol)
            @if ($rol->users->count())
                <div class="row d-flex justify-content-around">
                    <div class="col-12 mt-3 mb-2">
                        <h3>{{ $rol->name }}</h3>
                    </div>
                    <div class="col-12 col-md-11 table-responsive">
                        <table class="table table-striped table-hover table-sm tabla_data_table tabla-borrando display">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center text-dark" scope="col">Id</th>
                                    <th class="text-center text-dark" scope="col">Usuario</th>
                                    <th class="text-center text-dark" scope="col">Cargo</th>
                                    <th class="text-center text-dark" scope="col">N. Identificacion</th>
                                    <th class="text-center text-dark" scope="col">Nombres y Apellidos</th>
                                    <th class="text-center text-dark" scope="col">Email</th>
                                    <th class="text-center text-dark" scope="col">Telefono</th>
                                    <th class="text-center text-dark" scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rol->users as $usuario)
                                    <tr>
                                        <td class="text-center">{{ $usuario->id }}</td>
                                        <td>{{ $usuario->name }}</td>
                                        <td>{{ $usuario->empleado->cargo->cargo }}</td>
                                        <td>{{ $usuario->empleado->tipo_docu->abreb_id . '  ' . $usuario->empleado->identificacion }}</td>
                                        <td>{{ $usuario->empleado->nombres . ' ' . $usuario->empleado->apellidos }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td>{{ $usuario->empleado->telefono }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('usuario.edit', ['id' => $usuario->id]) }}" class="btn btn-sm btn-icon btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-original-title="Edit" aria-label="Edit" data-bs-original-title="Editar">
                                                <span class="btn-inner">
                                                   <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                   </svg>
                                                </span>
                                             </a>
                                            <form action="{{ route('usuario.destroy', ['id' => $usuario->id]) }}" class="d-inline form-eliminar"
                                                method="POST">
                                                @csrf @method('delete')
                                                <button type="submit" class="btn btn-sm btn-icon btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" href="#" aria-label="Delete" data-bs-original-title="Eliminar este registro">
                                                    <span class="btn-inner">
                                                       <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                          <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                          <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                          <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                       </svg>
                                                    </span>
                                                 </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        @endforeach
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
