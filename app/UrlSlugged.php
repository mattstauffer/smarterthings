<?php

namespace App;

trait UrlSlugged
{
    protected $slugKey = 'name';

    public function bootSlugging()
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
