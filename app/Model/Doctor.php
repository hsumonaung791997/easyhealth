<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
      protected $fillable = [
    	'name', 'education', 'position', 'description', 'media_id', 'status'
    ];

    public function media()
    {
        return $this->belongsTo('App\Model\Media', 'media_id');
    }
}
