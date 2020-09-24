<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Hall extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('halls')->insert([

            [   'name' => 'Lahore Grande Banquet Hall',
                'address' => 'Zafar Ali Rd, Gulberg V, Lahore, Punjab',
                'guest_range' => 100,
                'price_per_guest' => 1000,
                'details' => '',
                'status' => 1,
                'user_id' => 2,
                'city_id' => 10,
                'created_at' => '2020-09-22 00:00:00',
                'venuetype_id' => 1
            ],
            [   'name' => 'Mughal-e-Azam Banquet Complex',
                'address' => 'Usman Rd, Aibak Block Garden Town, Lahore, Punjab 54000',
                'guest_range' => 200,
                'price_per_guest' => 1100,
                'details' => '',
                'status' => 1,
                'user_id' => 3,
                'city_id' => 10,
                'created_at' => '2020-09-22 00:00:00',
                'venuetype_id' => 1
            ],
            [   'name' => 'Taj Mahal Banquet Hall',
                'address' => 'Ferozepur Road, Abu Bakar Block Garden Town, Lahore, Punjab',
                'guest_range' => 300,
                'price_per_guest' => 1200,
                'details' => '',
                'status' => 1,
                'user_id' => 4,
                'city_id' => 10,
                'created_at' => '2020-09-22 00:00:00',
                'venuetype_id' => 2
            ],
            [   'name' => 'Taj Banquets',
                'address' => 'Executive Lodges Sector B Bahria Town, Lahore, Punjab',
                'guest_range' => 500,
                'price_per_guest' => 1400,
                'details' => '',
                'status' => 1,
                'user_id' => 5,
                'city_id' => 10,
                'created_at' => '2020-09-22 00:00:00',
                'venuetype_id' => 2
            ],
            [   'name' => 'Al Raheem Banquets',
                'address' => 'Block D State Life Phase 1 State Life, Lahore, Punjab',
                'guest_range' => 600,
                'price_per_guest' => 1500,
                'details' => '',
                'status' => 1,
                'user_id' => 6,
                'city_id' => 10,
                'created_at' => '2020-09-22 00:00:00',
                'venuetype_id' => 3
            ],
            [   'name' => 'Lynx Banquets',
                'address' => 'Muslim League (Q) House، 35 Sundar Das Road، Off Davis Road, near لاہور, 54000',
                'guest_range' => 600,
                'price_per_guest' => 1600,
                'details' => '',
                'status' => 1,
                'user_id' => 7,
                'city_id' => 10,
                'created_at' => '2020-09-22 00:00:00',
                'venuetype_id' => 3
            ],
            [   'name' => 'Royal Banquet',
                'address' => 'Royal Banquets, Near Attock Petrol Pump, Main Barki Rd, Paragon City, Lahore, Punjab 54000',
                'guest_range' => 800,
                'price_per_guest' => 1700,
                'details' => '',
                'status' => 1,
                'user_id' => 8,
                'city_id' => 10,
                'created_at' => '2020-09-22 00:00:00',
                'venuetype_id' => 4
            ],
            [   'name' => 'Serene Banquets',
                'address' => 'Paragon City, Lahore, Punjab',
                'guest_range' => 1200,
                'price_per_guest' => 800,
                'details' => '',
                'status' => 1,
                'user_id' => 9,
                'city_id' => 10,
                'created_at' => '2020-09-22 00:00:00',
                'venuetype_id' => 4
            ],
            [   'name' => 'The Nishat Banquets',
                'address' => 'Emporium، Abdul Haque Rd, Commercial Area Phase 2 Johar Town, Lahore, Punjab 54000',
                'guest_range' => 500,
                'price_per_guest' => 1800,
                'details' => '',
                'status' => 1,
                'user_id' => 10,
                'city_id' => 10,
                'created_at' => '2020-09-22 00:00:00',
                'venuetype_id' => 5
            ],
            [   'name' => 'Liberty Castle',
                'address' => '79 Main Boulevard Gulberg, Block D1 Block D 1 Gulberg III, Lahore, Punjab',
                'guest_range' => 900,
                'price_per_guest' => 1000,
                'details' => '',
                'status' => 1,
                'user_id' => 11,
                'city_id' => 10,
                'created_at' => '2020-09-22 00:00:00',
                'venuetype_id' => 5
            ],



        ]);
    }
}
