<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = [
    	'title', 'description', 'media_id', 'status',
    ];

    
    public function media()
    {
        return $this->belongsTo('App\Model\Media', 'media_id');
    }
}
