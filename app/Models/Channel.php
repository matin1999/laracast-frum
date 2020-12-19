<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;
    public function getRouteKey()
    {
        return 'slug';
    }

    public function threads(){
        return $this->hasMany(Channel::class);
    }
}
