<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id',
        'body',
        'shop_id'
    ];

    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }



}
