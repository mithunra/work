<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    public function modules(){
        return $this->belongsToMany('App\Module','modules_logos','logo_id','module_id');
    }
}
