<?php

//<!--
//
//This page stores relationship between MainCategory table and other relevant tabels.
//
////-->

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    //

    protected $table = 'main_categories';
    public $timestamps = false;


    public function subCategories() {
        return $this->hasMany(SubCategory::class);
    }

}
