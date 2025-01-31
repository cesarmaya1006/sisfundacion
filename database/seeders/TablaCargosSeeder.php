<?php

namespace Database\Seeders;

use App\Models\Parametros\Area;
use App\Models\Parametros\Cargo;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class TablaCargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('cargos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('cargo_has_permissions')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        $datas = [
            ['area_id' => 1,'cargo' => 'Director',],
            ['area_id' => 1,'cargo' => 'Secretaria',],
            ['area_id' => 2,'cargo' => 'Coordinador',],
            ['area_id' => 3,'cargo' => 'Médico',],
            ['area_id' => 3,'cargo' => 'Nutricionista',],
            ['area_id' => 3,'cargo' => 'Odontólogo',],
            ['area_id' => 3,'cargo' => 'Psicólogo',],
            ['area_id' => 3,'cargo' => 'Trabajador Social',],
            ['area_id' => 3,'cargo' => 'Docente de Sistemas',],
            ['area_id' => 3,'cargo' => 'Profesor de Teatro',],
            ['area_id' => 3,'cargo' => 'Docente de Matemáticas',],

        ];
        $permisos = Permission::get();

        foreach ($datas as $data) {
            $cargo = Cargo::create([
                'area_id' => $data['area_id'],
                'cargo' => $data['cargo'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            if ($data['area_id'] ==1) {
                foreach ($permisos as $permiso) {
                    $cargo->cargos_permisos()->attach($permiso->id);
                }
            }
        }

    }
}
