<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Teamcover extends Model
{
    //
    protected $fillable = [
    	'title', 'media_id', 'description'
    ];

    public function media()
    {
    	return $this->belongsTo('App\Model\Media', 'media_id');
    }
}
