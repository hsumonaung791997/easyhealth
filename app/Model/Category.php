<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
 
    protected $fillable = ['name', 'media_id'];

    public function media()
    {
        return $this->belongsTo('App\Model\Media', 'media_id');
    }
 
 	public function service()
 	{
 		return $this->hasMany('App\Model\Service');
 	}

}
