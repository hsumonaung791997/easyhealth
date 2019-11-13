<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'content', 'media_id', 'status'];

    public function media()
    {
        return $this->belongsTo('App\Model\Media', 'media_id');
    }
}
