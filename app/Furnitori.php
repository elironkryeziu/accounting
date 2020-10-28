<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Furnitori extends Model
{
    //
    protected $table = 'furnitoret';

    protected $guarded =[];

    public function furnizimet()
    {
        return $this->hasMany('App\Furnizimet','furnitor_id');
    }
    
}
