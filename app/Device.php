<?php

namespace App;

use App\DeviceHandler;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $guarded = [];

    public function handlers()
    {
        return $this->hasMany(DeviceHandler::class);
    }
}
