<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Client extends Model implements Authenticatable
{
    //
use \Illuminate\Auth\Authenticatable;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function post(){
   return $this->hasMany('App\Post','client_id');
}

}
