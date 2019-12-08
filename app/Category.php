<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function childs()
    {
        return $this->hasMany('App\Category', 'parent');
    }

    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent');
    }

    public static function getMain()
    {
        return Category::where('main', 1)->get();
    }
}
