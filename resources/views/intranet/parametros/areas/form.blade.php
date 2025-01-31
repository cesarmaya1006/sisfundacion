<div class="row" id="row_caja_areas">
    <div class="col-12 col-md-3 form-group" id="caja_areas">
        <label for="area_id">Área Superior</label>
        <select id="area_id" class="form-control form-control-sm" name="area_id">
            <option value="">Seleccione un Área Superior</option>
            @foreach ($areas as $area)
                <option value="{{$area->id}}" {{isset($area_edit)?($area->id == $area_edit->area_id?'selected':''):''}}>{{$area->area}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-12 col-md-3 form-group" id="caja_area_nueva">
        <label class="requerido" for="area">Nombre del Área</label>
        <input type="text" class="form-control form-control-sm" value="{{ old('area', $area_edit->area ?? '') }}" name="area" id="area" >
    </div>
</div>
