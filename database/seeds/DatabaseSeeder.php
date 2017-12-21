<?php

use App\DeviceHandler;
use App\Manufacturer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(DeviceHandler::class)->create();
        factory(Manufacturer::class)->create();
    }
}
