<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "admin",
            'email' => "admin@admin.cl",
            'password' => bcrypt("123"),
            "rol" => 'administrador'
        ]);

        User::create([
            'name' => "sistema",
            'email' => "sistema@sistema.cl",
            'password' => bcrypt("123"),
            "rol" => 'sistema',
        ]);

        User::create([
            'name' => "encuestador",
            'email' => "encuestador@encuestador.cl",
            'password' => bcrypt("123"),
            "rol" => 'encuestador',            
        ]);

        User::create([
            'name' => "controlador",
            'email' => "controlador@controlador.cl",
            'password' => bcrypt("123"),
            "rol" => 'controlador',            
        ]);
    }
}
