<?php

use App\Device;
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

        $manufacturer = factory(Manufacturer::class)->create();
        $device = factory(Device::class)->create(['manufacturer_id' => $manufacturer->id]);
        factory(DeviceHandler::class)->create(['device_id' => $device->id]);
    }
}
