<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'summary', 'content', 'thumb', 'tags', 'source', 'cat_id', 'is_highlight', 'user_id',
    ];

    public function comment()
    {
        return $this->hasMany('App\Comment', 'article_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'cat_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
