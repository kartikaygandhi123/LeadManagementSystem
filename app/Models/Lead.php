<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;


    public function created_by_user()
    {
        // return $this->belongsTo('App\Role');
        return $this->hasOne(User::class, 'id', 'created_by');
    }
}
