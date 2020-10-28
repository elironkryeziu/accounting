<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Furnizimet extends Model
{
    //
    protected $table = 'furnizimet';

    protected $guarded =[];

    public function furnitori()
    {
        return $this->belongsTo('App\Furnitori','furnitor_id');
    }
}
