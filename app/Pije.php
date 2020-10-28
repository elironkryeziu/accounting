<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pije extends Model
{
    //
    protected $table = 'pijet';

    protected $guarded =[];

    public function furnizimet()
    {
        return $this->belongsToMany('App\FurnizimetPije','pije_id')->withPivot('qty', 'amount');
    }
}
