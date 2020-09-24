<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            [ 'name' => 'administrator','created_at' => '2020-09-22 00:00:00'],
            ['name' => 'manager','created_at' => '2020-09-22 00:00:00'],
            ['name' => 'user','created_at' => '2020-09-22 00:00:00']

        ]);



    }
}
