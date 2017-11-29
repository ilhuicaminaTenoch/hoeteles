<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Administrador Privilegiado',
                'email' => 'root@gmotelero.com',
                'password' => bcrypt('uno2tres'),
                'perfil_id' => 1
            ],
            [
                'name' => 'Director',
                'email' => 'director@gmotelero.com',
                'password' => bcrypt('uno2tres'),
                'perfil_id' => 2
            ],
            [
                'name' => 'Gerente de Zona',
                'email' => 'gerente@gmotelero.com',
                'password' => bcrypt('uno2tres'),
                'perfil_id' => 3
            ],
            [
                'name' => 'Administrador de Hotel',
                'email' => 'administrador@gmotelero.com',
                'password' => bcrypt('uno2tres'),
                'perfil_id' => 4
            ],
            [
                'name' => 'Recepción',
                'email' => 'recepcion@gmotelero.com',
                'password' => bcrypt('uno2tres'),
                'perfil_id' => 5
            ]]
        );
    }
}
