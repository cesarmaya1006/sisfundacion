<?php

namespace Database\Seeders;

use App\Models\Parametros\Empleado;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');


        $usuario1 = User::create([
            'name' => 'Cesar Maya',
            'email' => 'cesarmaya1006@gmail.com',
            'password' => bcrypt('123456789')
        ])->syncRoles('Administrador Sistema');
        // + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + +
        $usuario2 = User::create([
            'name' => 'Monica Moya',
            'email' => 'monicamoya@gmail.com',
            'password' => bcrypt('123456789')
        ])->syncRoles('Administrador');
        // + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + +
        $usuario3 = User::create([
            'name' => 'Silvia Mendoza',
            'email' => 'silviamendoza@gmail.com',
            'password' => bcrypt('123456789')
        ])->syncRoles('Funcionario');

        $empleado = Empleado::create([
            'id' => $usuario3->id,
            'cargo_id' => 1,
            'tipo_documento_id' => 1,
            'identificacion' => '123456789',
            'nombres' => 'Silvia',
            'apellidos' => 'Mendoza',
            'telefono' => '32165498787',
        ]);
        // + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + +
    }

    public function randomDate($start_date, $end_date)
    {
        // Convert to timetamps
        $min = strtotime($start_date);
        $max = strtotime($end_date);

        // Generate random number using above bounds
        $val = rand($min, $max);

        // Convert back to desired date format
        return date('Y-m-d', $val);
    }
}
