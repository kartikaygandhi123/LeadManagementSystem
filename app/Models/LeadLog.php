<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadLog extends Model
{
    use HasFactory;
    protected $fillable = ['lead_id', "followed_up_date", "lead_status", "lead_created_at", "lead_updated_at", "follow_up_scheduled_date", "follow_up_date", "created_at", "updated_at"];
}
