<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'parent_id', 'order',
    ];

    public function article()
    {
        return $this->hasMany('App\Article', 'cat_id', 'id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function parent()
    {
        return $this->hasMany(self::class, 'id', 'parent_id');
    }

    public function articles()
    {
        return $this->hasManyThrough('App\Article', 'App\Category', 'parent_id', 'cat_id', 'id');
    }
}
