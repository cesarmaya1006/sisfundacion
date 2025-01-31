<?php

namespace Database\Seeders;

use App\Models\Config\Menu;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('menus')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('menu_rol')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        // ========== ========== ========== ========== ========== ========== ========== ========== ========== ========== ========== ==========
        $menus = [
            //Menu Inicio
            ['nombre' => 'Inicio', 'menu_id' => null, 'url' => '/dashboard', 'orden' => '1', 'icono' => 'fas fa-home', 'Array_1' => []],
            //Menu configuración 2
            [
                'nombre' => 'Configuración Sistema', 'menu_id' => null, 'url' => '#', 'orden' => '2', 'icono' => 'fas fa-tools',
                'Array_1' => [
                    //Menu menu
                    ['nombre' => 'Menús', 'menu_id' => '2',  'url' =>  'configuracion_sis/menu', 'orden' => '1',  'icono' => 'fas fa-list-ul', 'Array_1' => []],
                    //Menu Roles
                    ['nombre' => 'Roles Usuarios', 'menu_id' => '2',  'url' =>  'configuracion_sis/rol', 'orden' => '2',  'icono' => 'fas fa-user-tag', 'Array_1' => []],
                    //Menu Menu_Roles
                    ['nombre' => 'Menú - Roles', 'menu_id' => '2',  'url' =>  'configuracion_sis/menu_rol', 'orden' => '2',  'icono' => 'fas fa-chalkboard-teacher', 'Array_1' => []],
                    //Menu permisos
                    ['nombre' => 'Permisos', 'menu_id' => '2',  'url' =>  'configuracion_sis/permiso_rutas', 'orden' => '2',  'icono' => 'fas fa-lock', 'Array_1' => []],
                    //Menu permisos-rol
                    ['nombre' => 'Permisos -Rol', 'menu_id' => '2',  'url' =>  'configuracion_sis/_permiso-rol', 'orden' => '2',  'icono' => 'fas fa-user-lock', 'Array_1' => []],
                    //Menu Empresas
                    ['nombre' => 'Usuarios', 'menu_id' => '2',  'url' =>  'configuracion_sis/usuarios', 'orden' => '2',  'icono' => 'fas fa-user-friends', 'Array_1' => []],

                ],
            ],
            //PARAMETROS
            [
                'nombre' => 'Parametros', 'menu_id' => null, 'url' => '#', 'orden' => '3', 'icono' => 'fas fa-cogs',
                'Array_1' => [
                    //Menu Áreas
                    ['nombre' => 'Áreas', 'menu_id' => '2',  'url' =>  'parametros/areas', 'orden' => '1',  'icono' => 'fas fa-sitemap', 'Array_1' => []],
                    //Menu Cargos
                    ['nombre' => 'Cargos', 'menu_id' => '2',  'url' =>  'parametros/cargos', 'orden' => '2',  'icono' => 'fas fa-sitemap', 'Array_1' => []],
                    //Menu Empleados
                    ['nombre' => 'Empleados', 'menu_id' => '2',  'url' =>  'parametros/empleados', 'orden' => '1',  'icono' => 'fas fa-users', 'Array_1' => []],
                ],
            ],
            //ESPECIALIDADES
            [
                'nombre' => 'Especialidades', 'menu_id' => null, 'url' => '#', 'orden' => '3', 'icono' => 'fas fa-hospital',
                'Array_1' => [
                    //Menu Medicina
                    ['nombre' => 'Medicina', 'menu_id' => '2',  'url' =>  'especialidades/medicina', 'orden' => '1',  'icono' => 'fas fa-user-md', 'Array_1' => []],
                    //Menu Nutricion
                    ['nombre' => 'Nutrición', 'menu_id' => '2',  'url' =>  'especialidades/nutricion', 'orden' => '2',  'icono' => 'fas fa-apple-alt', 'Array_1' => []],
                    //Menu Odontologia
                    ['nombre' => 'Odontología', 'menu_id' => '2',  'url' =>  'especialidades/odontologia', 'orden' => '2',  'icono' => 'fas fa-tooth', 'Array_1' => []],
                    //Menu Psicologia
                    ['nombre' => 'Psicología', 'menu_id' => '2',  'url' =>  'especialidades/psicologia', 'orden' => '1',  'icono' => 'fas fa-diagnoses', 'Array_1' => []],
                    //Menu Trabajo Social
                    ['nombre' => 'Trabajo Social', 'menu_id' => '2',  'url' =>  'especialidades/trabajo_social', 'orden' => '1',  'icono' => 'fas fa-diagnoses', 'Array_1' => []],
                ],
            ],

            //ESPECIALIDADES
            [
                'nombre' => 'Educación', 'menu_id' => null, 'url' => '#', 'orden' => '3', 'icono' => 'fas fa-chalkboard',
                'Array_1' => [
                    //Menu Medicina
                    ['nombre' => 'Sistemas', 'menu_id' => '2',  'url' =>  'educacion/sistemas', 'orden' => '1',  'icono' => 'fas fa-laptop-code', 'Array_1' => []],
                    //Menu Nutricion
                    ['nombre' => 'Teatro', 'menu_id' => '2',  'url' =>  'educacion/teatro', 'orden' => '2',  'icono' => 'fas fa-theater-masks', 'Array_1' => []],
                    //Menu Odontologia
                    ['nombre' => 'Matematicas', 'menu_id' => '2',  'url' =>  'educacion/matematicas', 'orden' => '2',  'icono' => 'fas fa-square-root-alt', 'Array_1' => []],
                ],
            ],
            //Menu Menores
            ['nombre' => 'Menores', 'menu_id' => null, 'url' => '/menores', 'orden' => '1', 'icono' => 'fas fa-child', 'Array_1' => []],

            // Otras Opciones
            [
                'nombre' => 'Otras opciones', 'menu_id' => null, 'url' => '#', 'orden' => '2', 'icono' => 'fas fa-question-circle',
                'Array_1' => [
                    //Menu politicas
                    ['nombre' => 'Consulte nuestas políticas de datos', 'menu_id' => '2',  'url' =>  'usuario/consulta-politicas', 'orden' => '1',  'icono' => 'fas fa-question-circle', 'Array_1' => []],

                ],
            ],
        ];
        // ========== ========== ========== ========== ========== ========== ========== ========== ========== ========== ========== ==========
        $x = 0;
        foreach ($menus as $menu) {
            $x++;
            $menu_new = Menu::create([
                'menu_id' => $menu['menu_id'],
                'nombre' => utf8_encode(utf8_decode($menu['nombre'])),
                'url' => $menu['url'],
                'orden' => $x,
                'icono' => $menu['icono'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            if (count($menu['Array_1']) > 0) {
                $this->sub_menu($menu['Array_1'], $menu_new->id);
            }
        }
        // ========== ========== ========== ========== ========== ========== ========== ========== ========== ========== ========== ==========
        // -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * --
        $menus = Menu::get();
        // -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * --
        foreach ($menus as $menu) {
            DB::table('menu_rol')->insert(['menu_id' => $menu->id, 'rol_id' => 1,]);
        }
        // -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * --
        /*DB::table('menu_rol')->insert(['menu_id' => 1, 'rol_id' => 2,]);
        for ($i = 17; $i < 34; $i++) {
            DB::table('menu_rol')->insert(['menu_id' => $i, 'rol_id' => 2,]);
        }*/
        // -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * -- * --
    }
    // * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    public function sub_menu($Array_1, $x)
    {
        $y = 0;
        foreach ($Array_1 as $sub_menu_array) {
            $y++;
            $sub_menu = Menu::create([
                'menu_id' => $x,
                'nombre' => utf8_encode(utf8_decode($sub_menu_array['nombre'])),
                'url' => $sub_menu_array['url'],
                'orden' => $y,
                'icono' => $sub_menu_array['icono'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            if (count($sub_menu_array['Array_1']) > 0) {
                $this->sub_menu($sub_menu_array['Array_1'], $sub_menu->id);
            }
        }
    }
}
