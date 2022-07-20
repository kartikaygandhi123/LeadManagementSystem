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



    public function followups()
    {
        // return $this->belongsTo('App\Role');
        return $this->hasMany(Followup::class, 'lead_id');
    }


    
    

    public function proposals()
    {
        // return $this->belongsTo('App\Role');
        return $this->hasMany(LeadProposal::class, 'lead_id');
    }

    public function assigned_to_user()
    {
        // return $this->belongsTo('App\Role');
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
