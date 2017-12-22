<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use UrlSlugged;

    protected $guarded = [];

    public function getUrlAttribute()
    {
        return route('devices.show', [$this->manufacturer, $this]);
    }

    public function handlers()
    {
        return $this->hasMany(DeviceHandler::class);
    }

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public static function protocols()
    {
        return [
            'zigbee', 'zwave', 'wifi', 'bluetooth'
        ];
    }
}
