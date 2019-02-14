<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    //
    public function vols() {
        return belongsToMany('App\Vol');
    }
}
