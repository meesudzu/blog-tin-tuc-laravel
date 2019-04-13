<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    public function user()
    {
        return $this->hasMany('App\User', 'permission_id', 'id');
    }
}
