<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //

    protected $table = 'sub_categories';


    public function mainCategories() {
        return $this->hasOne(MainCategory::class);
    }

}
