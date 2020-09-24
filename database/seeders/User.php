<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [   'name' => 'admin',
                'email'  => 'admin@admin.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>1
            ],

            [   'name' => 'Daffodils Manager',
                'email'  => 'daffodils_manager@manager.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>2
            ],

            [   'name' => 'Lahore Grande Banquet Hall Manager',
                'email'  => 'lahoregrandebanquethall@manager.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>2
            ],

            [   'name' => 'Mughal-e-Azam Banquet Complex Manager',
                'email'  => 'mughaleazambanquetcomplex@manager.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>2
            ],

            [   'name' => 'Taj Mahal Banquet Hall Manager',
                'email'  => 'tajmahalbanquethall@manager.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>2
            ],

            [   'name' => 'Taj Banquets Manager',
                'email'  => 'tajbanquetsmanager@manager.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>2
            ],

            [   'name' => 'Al Raheem Banquets Manager',
                'email'  => 'alraheembanquets@manager.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>2
            ],

            [   'name' => 'Lynx Banquets Manager',
                'email'  => 'lunxbanquets@manager.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>2
            ],

            [   'name' => 'Royal Banquet Manager',
                'email'  => 'royalbanquet@manager.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>2
            ],

            [   'name' => 'Serene Banquets Manager',
                'email'  => 'serenebanquets@manager.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>2
            ],

            [   'name' => 'The Nishat Banquets Manager',
                'email'  => 'thenishatbanquets@manager.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>2
            ],

            [   'name' => 'Liberty Castle Manager',
                'email'  => 'libertycastle@manager.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>2
            ],

            [   'name' => 'Usman Amir',
                'email'  => 'usmanamir@user.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>3
            ],

            [   'name' => 'Affan Amir',
                'email'  => 'affanamir@user.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>3
            ],

            [   'name' => 'Arshad Bashir',
                'email'  => 'arshadbashir@user.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>3
            ],

            [   'name' => 'Nayyar Abbas',
                'email'  => 'nayyarabbas@user.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>3
            ],

            [   'name' => 'khawar Saeed',
                'email'  => 'khawarsaeed@user.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>3
            ],

            [   'name' => 'Huzaifa Mirza',
                'email'  => 'huzaifamirza@user.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>3
            ],

            [   'name' => 'Yarukh Mehmood',
                'email'  => 'yarukhmehmood@user.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>3
            ],

            [   'name' => 'Ubaid Saeed',
                'email'  => 'ubaidsaeed@user.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>3
            ],

            [   'name' => 'Irfan Mirza',
                'email'  => 'irfanmirza@user.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>3
            ],

            [   'name' => 'Imtiaz Gujjar',
                'email'  => 'imtiazgujjar@user.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>3
            ],

            [   'name' => 'Farman Khan',
                'email'  => 'farmankhan@user.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>3
            ],

            [   'name' => 'Ali khan',
                'email'  => 'alikhan@user.com',
                'cnic' => 4444,
                'mobile_number' => 33333,
                'password' => bcrypt('123456'),
                'created_at' => '2020-09-22 00:00:00',
                'role_id'=>3
            ],


        ]);
    }
}
