<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function logos(){
        return $this->belongsToMany('App\Logo','modules_logos','module_id','logo_id');
    }
}
