<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    //
    protected $fillable = [
    	'name', 'description', 'media_id',
    ];

    public function media()
    {
        return $this->belongsTo('App\Model\Media', 'media_id');
    }
}
