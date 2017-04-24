<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    //

    protected $table = 'main_categories';

    public function subCategories() {
        return $this->hasMany(SubCategory::class);
    }



}
