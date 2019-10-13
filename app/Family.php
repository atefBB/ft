<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model 
{

    protected $table = 'family';
    public $timestamps = true;

    public function members()
    {
        return $this->hasMany('App\Person');
    }

}
