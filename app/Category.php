<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function childs()
    {
        return $this->hasMany('App\Category', 'parent');
    }

    public function parentCategory()
    {
        return $this->belongsTo('App\Category', 'parent' ,'id');
    }

    public static function main()
    {
        return Category::where('main', 1)->get();
    }
}
