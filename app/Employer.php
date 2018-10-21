<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable = [
        "name",
        "surname",
        "city",
        "salary"
    ];
    
    /**
     * Pracownik ma wielu klientów
     */
    public function clients()
    {
        return $this->hasMany('App\Client');
    }
    
    
}
