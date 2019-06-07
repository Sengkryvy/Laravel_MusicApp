<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'title', 'artist_id', 'album_cover', 'description'
    ];

    public function Songs() {
        return $this->hasMany('song');
    }
}
