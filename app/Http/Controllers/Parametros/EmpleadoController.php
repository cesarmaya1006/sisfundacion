<?php

namespace App\Http\Controllers\Parametros;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidaUsuario;
use App\Models\Config\TipoDocumento;
use App\Models\Parametros\Area;
use App\Models\Parametros\Empleado;
use App\Models\Parametros\Regional;
use App\Models\User;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = Area::get();
        return view('intranet.parametros.empleados.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $areas = Area::get();
        $tiposdocu = TipoDocumento::get();
        return view('intranet.parametros.empleados.crear', compact('areas', 'tiposdocu',));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidaUsuario $request)
    {
        $usuario_new = User::create([
            'name' => strtolower($request['nombres']) . ' ' . strtolower($request['apellidos']),
            'email' => strtolower($request['email']),
            'password' => bcrypt(utf8_encode($request['identificacion'])),
        ])->syncRoles('Funcionario');
        // - - - - - - - - - - - - - - - - - - - - - - - -
        $empleado_new = Empleado::create([
            'id' => $usuario_new->id,
            'cargo_id' => $request['cargo_id'],
            'tipo_documento_id' => $request['tipo_documento_id'],
            'identificacion' => $request['identificacion'],
            'nombres' => ucwords(strtolower($request['nombres'])),
            'apellidos' => ucwords(strtolower($request['apellidos'])),
            'telefono' => $request['telefono']
        ]);

        return redirect('parametros/empleados')->with('mensaje', 'Empleado creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $areas = Area::get();
        $tiposdocu = TipoDocumento::get();
        $empleado_edit = Empleado::findOrFail($id);

        return view('intranet.parametros.empleados.editar', compact('areas','empleado_edit','tiposdocu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValidaUsuario $request, string $id)
    {
        if (isset($request['estado'])) {
            $request['estado'] = 1;
        } else {
            $request['estado'] = 0;
        }

        $nombres_array = explode(' ', ucwords(strtolower($request['nombres'])));
        $apellidos_array = explode(' ', ucwords(strtolower($request['apellidos'])));
        // - - - - - - - - - - - - - - - - - - - - - - - -
        $usuario_editar = User::findOrFail($id);
        $usuario_editar->update([
            'name' => ucwords(strtolower($nombres_array[0])) . ' ' . ucwords(strtolower($apellidos_array[0])),
            'email' => strtolower($request['email']),
        ]);
        // - - - - - - - - - - - - - - - - - - - - - - - -
        $usuario_editar->empleado->update([
            'cargo_id' => $request['cargo_id'],
            'tipo_documento_id' => $request['tipo_documento_id'],
            'identificacion' => $request['identificacion'],
            'nombres' => ucwords(strtolower($request['nombres'])),
            'apellidos' => ucwords(strtolower($request['apellidos'])),
            'telefono' => $request['telefono'],
            'estado' => $request['estado']
        ]);

        return redirect('parametros/empleados')->with('mensaje', 'Empleado actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */



    // * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * - * -
    public function getEmpleadosRegional(Request $request)
    {
        if ($request->ajax()) {
            $regional_id = $_GET['id'];
            return response()->json(['empleados' => Empleado::with('tipo_docu')
                ->with('usuario')
                ->with('cargo')
                ->with('cargo.area')
                ->whereHas('cargo', function ($o) use ($regional_id) {
                    $o->whereHas('area', function ($p) use($regional_id){
                        $p->where('regional_id',$regional_id);
                    });
                })->get()]);
        } else {
            abort(404);
        }
    }
}
