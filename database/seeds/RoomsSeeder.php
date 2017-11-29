<?php

use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Rooms')->insert([
            'room_name' => 'Florencia',
            'room_shortname' => 'FLO',
            'room_description' => 'Habitación Sencilla',
            'ocupation_base' => 1,
            'ocupation_max' => 4,
            'type_room_id' => 1,
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime()
        ]);

        DB::table('Rooms')->insert([
            'room_name' => 'Roma',
            'room_shortname' => 'ROM',
            'room_description' => 'Habitación Suite',
            'ocupation_base' => 1,
            'ocupation_max' => 6,
            'type_room_id' => 2,
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime()
        ]);
    }
}
