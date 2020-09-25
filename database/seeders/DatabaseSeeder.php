<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
//USER / ROLE MANAGEMENT//
        $this->call(Role::class);
        $this->call(User::class);
        $this->call(RoleUserPivotTable::class);
//HALL MANAGEMENT//

        $this->call(VenueType::class);
        $this->call(City::class);
        $this->call(Hall::class);
        $this->call(Photo::class);

        $this->call(Ratting::class);
        $this->call(Ammenties::class);

    }
}
