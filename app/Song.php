<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function Album() {
        return $this->belongsTo('Album');
    }
    public function Artist() {
        return $this->belongsTo('Artist');
    }
}
