<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content_type', 'content_title', 'content_body', 'content_author'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}