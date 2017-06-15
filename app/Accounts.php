<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    //

    public function scopeDisabled($query){
    	return $query->where('enabled',0);
    }
}
