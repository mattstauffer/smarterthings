<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceHandler extends Model
{
    protected $guarded = [];

    public function getUrlAttribute()
    {
        return route('manufacturers.devices.handlers.show', [$this->device->manufacturer_id, $this->device_id, $this->id]);
    }

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
