<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use UrlSlugged;

    protected $guarded = [];

    public function getUrlAttribute()
    {
        return route('manufacturers.show', $this);
    }

    public function devices()
    {
        return $this->hasMany(Device::class);
    }
}
