<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class TablaRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('roles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        // ===================================================================================
        $rol1 = Role::create(['name' => 'Administrador Sistema']);
        $rol2 = Role::create(['name' => 'Administrador']);
        $rol3 = Role::create(['name' => 'Funcionario']);
        // =======================================================================================================
        Permission::create(['name' => 'dashboard'])->syncRoles([$rol1, $rol2, $rol3]);
        // ===================================================================================
        //Areas
        Permission::create(['name' => 'area.index'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'area.edit'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'area.destroy'])->syncRoles([$rol1, $rol2]);
        // =======================================================================================================
        //cargos
        Permission::create(['name' => 'cargo.index'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'cargo.create'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'cargo.edit'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'cargo.store'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'cargo.update'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'cargo.destroy'])->syncRoles([$rol1, $rol2]);
        // =======================================================================================================
        //Usuarios
        Permission::create(['name' => 'usuario.index'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'usuario.create'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'usuario.edit'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'usuario.store'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'usuario.update'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'usuario.destroy'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'usuario.activar'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'usuario.getUsuariosRegional'])->syncRoles([$rol1, $rol2]);
        // =======================================================================================================
        //Usuarios
        Permission::create(['name' => 'empleado.index'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'empleado.create'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'empleado.edit'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'empleado.store'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'empleado.update'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'empleado.destroy'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'empleado.activar'])->syncRoles([$rol1, $rol2]);
        // =======================================================================================================
        //Usuarios
        Permission::create(['name' => 'menores.index'])->syncRoles([$rol1]);
        Permission::create(['name' => 'menores.create'])->syncRoles([$rol1]);
        Permission::create(['name' => 'menores.edit'])->syncRoles([$rol1]);
        Permission::create(['name' => 'menores.store'])->syncRoles([$rol1]);
        Permission::create(['name' => 'menores.update'])->syncRoles([$rol1]);
        Permission::create(['name' => 'menores.destroy'])->syncRoles([$rol1]);
        Permission::create(['name' => 'menores.activar'])->syncRoles([$rol1]);
        // =======================================================================================================
    }
}
