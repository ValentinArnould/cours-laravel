<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    //
    public function voyage() {
        return $this->hasOne('App\Voyage');
    }

}
