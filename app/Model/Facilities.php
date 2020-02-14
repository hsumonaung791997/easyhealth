<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    //
    protected $fillable = ['media_id'];

    public function media()
    {
    	return $this->belongsTo('App\Model\Media', 'media_id');
    }
}
