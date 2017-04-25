<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchasedListing extends Model
{
    //

    protected $table = 'purchased_listing';
    public $timestamps = false;


    public function belongsTo() {
        return $this->belongsTo(User::class);
    }
}
