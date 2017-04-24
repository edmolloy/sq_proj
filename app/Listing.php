<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //

    protected $table = 'listings';


    public function owner() {
        return $this->belongsTo('App\User');
    }
}
