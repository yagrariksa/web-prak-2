<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['name','desc','img','price','pub_id'];

    public function publisher()
    {
        return $this->belongsTo('App\Models\GamePublisher','pub_id','id');
    }

}
