<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceHandler extends Model
{
    protected $guarded = [];

    public function getUrlAttribute()
    {
        return route('devicehandlers.show', $this);
    }
}
