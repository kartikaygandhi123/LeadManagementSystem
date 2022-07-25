<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadLog extends Model
{
    use HasFactory;
    protected $fillable = ['lead_id', "user_id", "lead_owner_id", "lead_status", "lead_stage","message",
        "created_at", "updated_at"];
    
    
    
    public function lead_owner()
    {
        return $this->hasOne(User::class, 'id', 'lead_owner_id');
    }

    
    public function lead_assigned()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    
}
