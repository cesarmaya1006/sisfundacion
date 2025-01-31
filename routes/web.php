<?php

use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Config\MenuController;
use App\Http\Controllers\Config\MenuRolController;
use App\Http\Controllers\Config\PermisoController;
use App\Http\Controllers\Config\PermisoRolController;
use App\Http\Controllers\Config\RolController;
use App\Http\Controllers\Extranet\ExtranetPageController;
use App\Http\Controllers\Intranet\IntranetPageController;
use App\Http\Controllers\Menores\MenorController;
use App\Http\Controllers\Parametros\AreaController;
use App\Http\Controllers\Parametros\CargoController;
use App\Http\Controllers\Parametros\EmpleadoController;
use App\Http\Middleware\Administrador;
use App\Http\Middleware\AdminSistema;
use App\Http\Middleware\Funcionario;
use Illuminate\Support\Facades\Route;


Route::controller(ExtranetPageController::class)->group(function () {
    Route::get('/', 'index')->name('extranet.index');
    Route::get('/acceso', 'acceso')->name('extranet.acceso');
});

//Route::get('/', function () {return view('welcome');});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    //Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/dashboard', [IntranetPageController::class, 'dashboard'])->name('dashboard');
    Route::prefix('configuracion_sis')->middleware(AdminSistema::class)->group(function () {
        Route::controller(MenuController::class)->prefix('menu')->group(function () {
            Route::get('', 'index')->name('menu.index');
            Route::get('crear', 'create')->name('menu.create');
            Route::get('editar/{id}', 'edit')->name('menu.edit');
            Route::post('guardar', 'store')->name('menu.store');
            Route::put('actualizar/{id}', 'update')->name('menu.update');
            Route::get('eliminar/{id}', 'destroy')->name('menu.destroy');
            Route::get('guardar-orden', 'guardarOrden')->name('menu.ordenar');
        });
        // ------------------------------------------------------------------------------------
        // Ruta Administrador del Sistema Roles
        Route::controller(RolController::class)->prefix('rol')->group(function () {
            Route::get('', 'index')->name('rol.index');
            Route::get('crear', 'create')->name('rol.create');
            Route::get('editar/{id}', 'edit')->name('rol.edit');
            Route::post('guardar', 'store')->name('rol.store');
            Route::put('actualizar/{id}', 'update')->name('rol.update');
            Route::delete('eliminar/{id}', 'destroy')->name('rol.destroy');
        });
        // ----------------------------------------------------------------------------------------
        /* Ruta Administrador del Sistema Menu Rol*/
        Route::controller(MenuRolController::class)->prefix('menu_rol')->group(function () {
            Route::get('', 'index')->name('menu.rol.index');
            Route::post('guardar', 'store')->name('menu.rol.store');
        });
        // ------------------------------------------------------------------------------------
        // Ruta Administrador del Permisos Roles
        Route::controller(PermisoController::class)->prefix('permiso_rutas')->group(function () {
            Route::get('', 'index')->name('permiso_rutas.index');
        });
        /* Ruta Administrador del Sistema Menu Rol*/
        Route::controller(PermisoRolController::class)->prefix('_permiso-rol')->group(function () {
            Route::get('', 'index')->name('permisos_rol.index');
            Route::post('guardar', 'store')->name('permisos_rol.store');
            Route::get('excepciones/{permission_id}/{role_id}', 'excepciones')->name('permisos_rol.excepciones');
            Route::post('guardar_excepciones', 'store_excepciones')->name('permisos_rol.store_excepciones');
        });
        // ----------------------------------------------------------------------------------------
        // ------------------------------------------------------------------------------------
    });
    Route::middleware(Administrador::class)->group(function () {
        // ----------------------------------------------------------------------------------------
        // Ruta Administrador del Sistema Usuarios
        Route::controller(UsuarioController::class)->prefix('configuracion_sis/usuarios')->group(function () {
            Route::get('', 'index')->name('usuario.index');
            Route::get('crear', 'create')->name('usuario.create');
            Route::get('editar/{id}', 'edit')->name('usuario.edit');
            Route::post('guardar', 'store')->name('usuario.store');
            Route::put('actualizar/{id}', 'update')->name('usuario.update');
            Route::delete('eliminar/{id}', 'destroy')->name('usuario.destroy');
            Route::put('activar/{id}', 'activar')->name('usuario.activar');
            // *--* *--* *--* *--* *--* *--* *--* *--* *--* *--* *--* *--* *--* *--* *--* *--* *--*
        });
        Route::prefix('parametros')->group(function () {
            // ------------------------------------------------------------------------------------
            // Ruta Áreas
            Route::controller(AreaController::class)->prefix('areas')->group(function () {
                Route::get('', 'index')->name('area.index');
                Route::get('crear', 'create')->name('area.create');
                Route::get('editar/{id}', 'edit')->name('area.edit');
                Route::post('guardar', 'store')->name('area.store');
                Route::put('actualizar/{id}', 'update')->name('area.update');
                Route::delete('eliminar/{id}', 'destroy')->name('area.destroy');
                Route::get('getAreas', 'getAreas')->name('areas.getAreas');
                Route::get('getDependencias/{id}', 'getDependencias')->name('areas.getDependencias');
            });
            // ------------------------------------------------------------------------------------
            // Ruta Cargos
            Route::controller(CargoController::class)->prefix('cargos')->group(function () {
                Route::get('', 'index')->name('cargo.index');
                Route::get('crear', 'create')->name('cargo.create');
                Route::get('editar/{id}', 'edit')->name('cargo.edit');
                Route::post('guardar', 'store')->name('cargo.store');
                Route::put('actualizar/{id}', 'update')->name('cargo.update');
                Route::delete('eliminar/{id}', 'destroy')->name('cargo.destroy');
                Route::get('getCargos', 'getCargos')->name('cargo.getCargos');
                Route::get('getAreasCargos', 'getAreasCargos')->name('cargo.getAreasCargos');
                Route::get('getCargosTodos', 'getCargosTodos')->name('cargo.getCargosTodos');
                Route::get('getAreas', 'getAreas')->name('cargo.getAreas');
                Route::get('getCargosByArea', 'getCargosByArea')->name('cargo.getCargosByArea');
            });
            // ----------------------------------------------------------------------------------------
            // Ruta Empleados
            Route::controller(EmpleadoController::class)->prefix('empleados')->group(function () {
                Route::get('', 'index')->name('empleado.index');
                Route::get('crear', 'create')->name('empleado.create');
                Route::get('editar/{id}', 'edit')->name('empleado.edit');
                Route::post('guardar', 'store')->name('empleado.store');
                Route::put('actualizar/{id}', 'update')->name('empleado.update');
                Route::delete('eliminar/{id}', 'destroy')->name('empleado.destroy');
                Route::put('activar/{id}', 'activar')->name('empleado.activar');
                Route::get('getEmpleadosRegional', 'getEmpleadosRegional')->name('empleado.getEmpleadosRegional');
                // *--* *--* *--* *--* *--* *--* *--* *--* *--* *--* *--* *--* *--* *--* *--* *--* *--*
            });
            // ----------------------------------------------------------------------------------------
        });
    });
    Route::prefix('menores')->middleware(Funcionario::class)->controller(MenorController::class)->group(function () {
        Route::get('', 'index')->name('menor.index');
        Route::get('crear', 'create')->name('menor.create');
        Route::get('editar/{id}', 'edit')->name('menor.edit');
        Route::post('guardar', 'store')->name('menor.store');
        Route::put('actualizar/{id}', 'update')->name('menor.update');
        Route::delete('eliminar/{id}', 'destroy')->name('menor.destroy');
        Route::put('activar/{id}', 'activar')->name('menor.activar');
    });
});
