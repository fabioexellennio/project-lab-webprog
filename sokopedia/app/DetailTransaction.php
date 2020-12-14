<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    protected $guarded = [];

    public function transaction(){
        return $this->belongsTo('App\Transaction');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }
}
