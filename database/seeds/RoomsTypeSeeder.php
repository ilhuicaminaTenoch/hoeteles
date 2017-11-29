<?php

use Illuminate\Database\Seeder;

class RoomsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       /*DB::table('RoomsType')->insert([
            'type_name' => 'Habitación Sencilla',
            'type_description' => 'habitación sencilla',
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime()
        ]);

        DB::table('RoomsType')->insert([
            'type_name' => 'Habitación Doble',
            'type_description' => 'habitación Doble',
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime()
        ]);

        DB::table('RoomsType')->insert([
            'type_name' => 'Habitación Suite',
            'type_description' => 'habitación Suite',
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime()
        ]);*/
        factory(\App\RoomsType::class,35)->create();
    }
}
