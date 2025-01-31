@if (isset($usuario_edit))
    <div class="row">
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" name="estado" id="estado" value="{{$usuario_edit->estado?'1':'0'}}" {{$usuario_edit->estado?'checked':''}}>
                <label class="form-check-label" id="labelCheck" for="estado">{{$usuario_edit->estado?'usuario Activo':'usuario Inactivo'}}</label>
            </div>
        </div>
    </div>
    <br>
@endif
<div class="row">
    <input type="hidden" name="rol_id" value="3">
    <div class="col-12 col-md-3 form-group">
        <label class="requerido" for="regional_id">Regional</label>
        <select id="regional_id" name="regional_id" class="form-control form-control-sm" data_url="{{route('areas.getAreas')}}" required>
            <option value="">Elija Regional</option>
            @foreach ($regionales as $regional)
                <option value="{{ $regional->id }}" {{isset($usuario_edit)? ($usuario_edit->regional_id==$regional->id? 'selected':''):''}}>
                    {{ $regional->regional }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-12 col-md-3 form-group">
        <label class="requerido" for="tipo_documento_id">Tipo de identificación</label>
        <select id="tipo_documento_id" class="form-control form-control-sm" name="tipo_documento_id" required>
            <option value="">Elija tipo</option>
            @foreach ($tiposdocu as $tipoDocu)
                <option value="{{ $tipoDocu->id }}" {{isset($usuario_edit)?$usuario_edit->tipo_documento_id == $tipoDocu->id?'selected':'':''}}>
                    {{ $tipoDocu->abreb_id .' - ' . $tipoDocu->tipo_id}}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-12 col-md-3 form-group">
        <label class="requerido" for="identificacion">Identificación</label>
        <input type="text" class="form-control form-control-sm" value="{{ old('identificacion', $usuario_edit->identificacion ?? '') }}" name="identificacion" id="identificacion" required>
    </div>
    <div class="col-12 col-md-3 form-group">
        <label class="requerido" for="nombres">Nombres</label>
        <input type="text" class="form-control form-control-sm" value="{{ old('nombres', $usuario_edit->nombres ?? '') }}" name="nombres" id="nombres" required>
    </div>
    <div class="col-12 col-md-3 form-group">
        <label class="requerido" for="apellidos">Apellidos</label>
        <input type="text" class="form-control form-control-sm" value="{{ old('apellidos', $usuario_edit->apellidos ?? '') }}" name="apellidos" id="apellidos" required>
    </div>
    <div class="col-12 col-md-3 form-group">
        <label class="requerido" for="email">Correo Electrónico</label>
        <input type="email" class="form-control form-control-sm" value="{{ old('email', $usuario_edit->usuario->email ?? '') }}" name="email" id="email" required>
    </div>
    <div class="col-12 col-md-3 form-group">
        <label class="requerido" for="telefono">Teléfono</label>
        <input type="text" class="form-control form-control-sm" value="{{ old('telefono', $usuario_edit->telefono ?? '') }}" name="telefono" id="telefono" required>
    </div>
</div>

