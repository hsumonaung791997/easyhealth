<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['title','description','media_id','position'];

    public function media()
    {
    	return $this->belongsTo('App\Model\Media', 'media_id');
    }
}

