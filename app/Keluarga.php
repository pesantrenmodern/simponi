<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    protected $table = "keluarga";

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
