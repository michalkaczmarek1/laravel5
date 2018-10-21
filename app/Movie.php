<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
     protected $fillable = [
        "title",
        "year",
        "price",
        "description"
    ];
     
    /**
     * W filmie gra wielu aktorów
     */
    public function actors() 
    {
        return $this->belongsToMany('App\Actor')->withTimestamps();
    }
    
    /**
     * Lista id aktorów dla filmu
     */
    public function getActorListAttribute() 
    {
        return $this->actors->pluck('id')->all();
    }
}
