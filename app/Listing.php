<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Listing extends Model
{
    //

    protected $table = 'listings';
    public $timestamps = false;


    public function user() {

        return $this->belongsTo(User::class);
    }

    public function listingOnWatch() {
        return $this->hasOne(ListingOnWatch::class);
    }


    public function sort($main_cat_id, $sub_cat_id) {

        $main_cat_id_int = integerValue($main_cat_id);
        $sub_cat_id_int = integerValue($sub_cat_id);

        $listings = DB::table('listings')
            ->join('sub_categories', 'listings.sub_cat_id', '=', 'listings.id')
            ->join('main_categories', 'sub_categories.main_id', '=', 'main_categories.id')
            ->where([
                ['main_categories.id', '=', $main_cat_id_int],
                ['listings.sub_cat_id', '=', $sub_cat_id_int]
            ])
            ->select('listings.id', 'listings.title', 'listings.price', 'listings.description');

        return view('listings/{$main_cat_id}/{$sub_cat_id}', ['listings' => $listings]);
    }

}
