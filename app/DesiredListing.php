<?php

//This table stores information regarding the Desited Listings table and all it's relations to other tables'


namespace App;

use Illuminate\Database\Eloquent\Model;

class DesiredListing extends Model
{
    //

    protected $table = 'desired_listings';
    public $timestamps = false;



    public function belongsTo() {
        return $this->belongsTo(User::class);
    }



}
