<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GamePublisher extends Model
{
    protected $fillable = ['name'];

    public function game()
    {
        return $this->hasMany('App\Models\Game');
    }
}
