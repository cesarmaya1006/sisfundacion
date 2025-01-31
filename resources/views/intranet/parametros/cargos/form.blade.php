<div class="row">
    <div class="col-12 col-md-3 form-group" id="col_caja_areas">
        <label class="requerido" for="area_id" id="label_area_id">Área</label>
        <select id="area_id" name="area_id" class="form-control form-control-sm" required>
            <option value="">Elija un área</option>
            @foreach ($areas as $area)
                <option value="{{ $area->id }}" {{ isset($cargo_edit)?($cargo_edit->area_id==$area->id? 'selected':''):''}}>
                    {{ $area->area }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-12 col-md-3 form-group" id="caja_cargo_nueva">
        <label class="requerido" for="cargo">Nombre del Cargo</label>
        <input type="text" class="form-control form-control-sm" value="{{ old('cargo', $cargo_edit->cargo ?? '') }}" name="cargo" id="cargo" >
    </div>
</div>


