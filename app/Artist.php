<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'career_name', 'image'
    ];
    public function Songs() {
        return $this->hasMany('Song');
}
}
