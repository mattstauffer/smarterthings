<?php

namespace App;

trait UrlSlugged
{
    static $slugKey = 'name';

    public static function bootUrlSlugged()
    {
        static::creating(function ($model) {
            if (! $model->slug) {
                $model->slug = str_slug($model->{static::$slugKey});
            }
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
