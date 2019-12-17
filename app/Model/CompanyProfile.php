<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    //
    protected $fillable = [
    	'title', 'description', 'media_id',
    ];

    public function media()
    {
        return $this->belongsTo('App\Model\Media', 'media_id');
    }
}
