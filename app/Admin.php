<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use App\User;

    class Admin extends User
    {
        protected $table = 'users';

        protected static function boot()
        {
            parent::boot();

            static::addGlobalScope('admin', function (Builder $builder) {
                $builder->where('type', 'admin');
            });
        }
    }
