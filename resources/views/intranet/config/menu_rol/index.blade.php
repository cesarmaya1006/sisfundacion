@extends('intranet.layout2.app')
@section('css_pagina')
<link rel="stylesheet" href="{{ asset('css/intranet/menu/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/intranet/menu/menu_nestable.css') }}">
@endsection
@section('tituloPagina')
<i class="fa fa-cogs mr-3" aria-hidden="true"></i> Configuración - Menu/Roles
@endsection
@section('subTituloPagina')
Administración de permisos Menu - Roles
@endsection
@section('botones_card')
<a href="{{ route('rol.create') }}" class="btn btn-info btn-sm btn-sombra text-center pl-5 pr-5 float-md-end">
    <i class="fa fa-plus-circle mr-3" aria-hidden="true"></i>
    Nuevo registro
</a>
@endsection
@section('breadcrumb')
@endsection
@section('cuerpoPagina')
<div class="row d-flex justify-content-md-center">
    <div class="col-12 table-responsive">
        @csrf
        <table class="table table-striped table-hover" id="tabla-data">
            <thead>
                <tr>
                    <th>Menú</th>
                    @foreach ($rols as $id => $name)
                        <th class="text-center" style="width:1px;white-space:nowrap; max-width: 200px;">
                            {{ utf8_encode(ucwords(strtolower(utf8_decode($name)))) }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $key => $menu)
                    @if ($menu['menu_id'] != 0)
                        @break
                    @endif
                <tr>
                    <td class="font-weight-bold" style="width:1px;white-space:nowrap;">
                        <i class="fa fa-arrows-alt"></i>
                            {{ utf8_encode(ucfirst(strtolower(utf8_decode($menu['nombre'])))) }}  -  {{$menu['id']}}
                    </td>
                    @foreach ($rols as $id => $name)
                        <td class="text-center">
                            <input type="checkbox" class="menu_rol" name="menu_rol[]"
                                data-menuid={{ $menu['id'] }} value="{{ $id }}"
                                {{ in_array($id, array_column($menusRols[$menu['id']], 'id')) ? 'checked' : '' }}>
                        </td>
                    @endforeach
                </tr>
                @foreach ($menu['submenu'] as $key => $hijo)
                    <tr>
                        <td class="pl-20  pl-4" style="width:1px;white-space:nowrap;"><i class="fa fa-arrow-right"></i>
                            {{ utf8_encode(ucfirst(strtolower(utf8_decode($hijo['nombre'])))) }}   -  {{$hijo['id']}}</td>
                        @foreach ($rols as $id => $name)
                            <td class="text-center">
                                <input type="checkbox" class="menu_rol" name="menu_rol[]"
                                    data-menuid={{ $hijo['id'] }} value="{{ $id }}"
                                    {{ in_array($id, array_column($menusRols[$hijo['id']], 'id')) ? 'checked' : '' }}>
                            </td>
                        @endforeach
                    </tr>
                    @foreach ($hijo['submenu'] as $key => $hijo2)
                        <tr>
                            <td class="pl-30" style="width:1px;white-space:nowrap;"><i
                                    class="fa fa-arrow-right"></i>
                                {{ utf8_encode(ucfirst(strtolower(utf8_decode($hijo2['nombre'])))) }}   -  {{$hijo2['id']}}</td>
                            @foreach ($rols as $id => $name)
                                <td class="text-center">
                                    <input type="checkbox" class="menu_rol" name="menu_rol[]"
                                        data-menuid={{ $hijo2['id'] }} value="{{ $id }}"
                                        {{ in_array($id, array_column($menusRols[$hijo2['id']], 'id')) ? 'checked' : '' }}>
                                </td>
                            @endforeach
                        </tr>
                        @foreach ($hijo2['submenu'] as $key => $hijo3)
                            <tr>
                                <td class="pl-40" style="width:1px;white-space:nowrap;"><i
                                        class="fa fa-arrow-right"></i>
                                    {{ utf8_encode(ucfirst(strtolower(utf8_decode($hijo3['nombre'])))) }}   -  {{$hijo3['id']}}
                                </td>
                                @foreach ($rols as $id => $name)
                                    <td class="text-center">
                                        <input type="checkbox" class="menu_rol" name="menu_rol[]"
                                            data-menuid={{ $hijo3['id'] }} value="{{ $id }}"
                                            {{ in_array($id, array_column($menusRols[$hijo3['id']], 'id')) ? 'checked' : '' }}>
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    @endforeach
                @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('modales')

@endsection
@section('script_pagina')
<input type="hidden" id="rutaMenuRol" data_url="{{route('menu.rol.store')}}">
<script src="{{ asset('js/intranet/configuracion/menu_rol/menu_rol.js') }}"></script>
@endsection
