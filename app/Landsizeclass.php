<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landsizeclass extends Model
{

    protected  $table = 'landsizeclasses';
    protected  $guarded=[];

    public function Landcategory()
    {
        return $this->belongsTo('App\Landcategory');
    }
}
