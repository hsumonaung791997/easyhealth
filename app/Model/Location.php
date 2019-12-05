<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name', 'address', 'description','latitude', 'longitude', 'media_id'];

    public function media()
    {
        return $this->belongsTo('App\Model\Media', 'media_id');
    }
}
