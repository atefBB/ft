<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model 
{

    protected $table = 'persons';
    public $timestamps = true;

    public function family()
    {
        return $this->belongsTo('App\Family');
    }
}
