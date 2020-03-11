<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];

    public function akses()
    {
        return $this->hasMany(Akses::class);
    }
}
