<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = [
    	'title', 'content_one', 'media_id', 'status','parent', 'type', 'content_two',
    ];

    
    public function media()
    {
        return $this->belongsTo('App\Model\Media', 'media_id');
    }

}
