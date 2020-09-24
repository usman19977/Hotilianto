<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cities')->insert([
            [   'name' => 'Karachi',
                'postal_code' => 75100,
                'created_at' => '2020-09-22 00:00:00'
            ],
            [   'name' => 'Peshawar',
                'postal_code' => 75100,
                'created_at' => '2020-09-22 00:00:00'
            ],       [   'name' => 'Jehlum',
                'postal_code' => 75100,
                'created_at' => '2020-09-22 00:00:00'
            ],       [   'name' => 'Rawalpindi',
                'postal_code' => 75100,
                'created_at' => '2020-09-22 00:00:00'
            ],       [   'name' => 'Gujrat',
                'postal_code' => 75100,
                'created_at' => '2020-09-22 00:00:00'
            ],       [   'name' => 'Islamabad',
                'postal_code' => 75100,
                'created_at' => '2020-09-22 00:00:00'
            ],       [   'name' => 'Multan',
                'postal_code' => 75100,
                'created_at' => '2020-09-22 00:00:00'
            ],       [   'name' => 'Faislabad',
                'postal_code' => 75100,
                'created_at' => '2020-09-22 00:00:00'
            ],       [   'name' => 'Quetta',
                'postal_code' => 75100,
                'created_at' => '2020-09-22 00:00:00'
            ],       [   'name' => 'Lahore',
                'postal_code' => 75100,
                'created_at' => '2020-09-22 00:00:00'
            ],

        ]);
    }
}
