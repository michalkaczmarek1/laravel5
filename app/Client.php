<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        "name",
        "surname",
        "employer_id"
    ];
    
    /**
     * Klient ma swojego przedstawiciela
     */
    public function employer()
    {
        return $this->belongsTo('App\Employer');
    }
  
}
