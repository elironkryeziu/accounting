<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FurnizimetPije extends Model
{
    //
    protected $table = 'furnizimet_pije';

    protected $guarded =[];

    public function pijet()
    {
        return $this->belongsToMany('App\Pije','furnizimet_pije_items','furnizim_id')->withPivot('qty', 'amount');
    }
    
    public function furnitori()
    {
        return $this->belongsTo('App\Furnitori','furnitor_id');
    }
}
