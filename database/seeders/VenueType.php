<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VenueType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('venue_types')->insert([
            [   'name' => 'Valima',
                'created_at' => '2020-09-22 00:00:00'
            ],
            [   'name' => 'Barat',
                'created_at' => '2020-09-22 00:00:00'
            ],
            [   'name' => 'Mhendi',
                'created_at' => '2020-09-22 00:00:00'
            ],
            [   'name' => 'Birthday',
                'created_at' => '2020-09-22 00:00:00'
            ],
            [   'name' => 'Corporate',
                'created_at' => '2020-09-22 00:00:00'
            ],
            [   'name' => 'Ocassional',
                'created_at' => '2020-09-22 00:00:00'
            ],
        ]);
    }
}
