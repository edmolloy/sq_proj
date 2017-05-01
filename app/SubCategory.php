<?php
//
//<!--
//
//This page stores relationship between SubCategory table and other relevant tabels.
//
////-->


namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //

    protected $table = 'sub_categories';
    public $timestamps = false;



    public function mainCategories() {
        return $this->belongsTo(MainCategory::class);
    }
}
