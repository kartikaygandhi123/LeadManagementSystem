<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadLog extends Model
{
    use HasFactory;
    protected $fillable = ['lead_id', "user_id", "lead_owner_id", "lead_status", "lead_stage","message",
        "created_at", "updated_at"];
}
