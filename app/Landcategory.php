<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landcategory extends Model
{
    protected  $table = 'landcategories';
    protected  $guarded=[];
    public function landsizeclasses()
    {
        return $this->hasMany('App\Landsizeclass');
    }
}
