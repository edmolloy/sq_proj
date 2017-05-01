<?php

//<!--
//
//This page stores relationship between ListingsOnWatch table and other relevant tabels.
//
////-->



namespace App;

use Illuminate\Database\Eloquent\Model;

class ListingOnWatch extends Model
{
    //

    protected $table = 'listings_on_watch';
    public $timestamps = false;


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function listing() {
        return $this->hasOne(Listing::class);
    }

}
