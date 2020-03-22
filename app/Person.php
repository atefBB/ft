<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model 
{
    protected $fillable = array(
	"firstname", 
	"lastname", 
	"birth_date",
        "gender"	
    );
    protected $table = 'persons';
    public $timestamps = true;
    
    public function family()
    {
        return $this->belongsTo('App\Family');
    }
}
