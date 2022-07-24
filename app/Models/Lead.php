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

    public function customer()
    {
        // return $this->belongsTo('App\Role');
        return $this->hasOne(BrandProfile::class, 'id', 'customer_id');
    }



    public function followups()
    {
        // return $this->belongsTo('App\Role');
        return $this->hasMany(Followup::class, 'lead_id');
    }





    public function legalRemarks()
    {
        // return $this->belongsTo('App\Role');
        return $this->hasMany(LegalRemark::class, 'lead_id');
    }

    public function legalExecuted()
    {
        // return $this->belongsTo('App\Role');
        return $this->hasMany(LeadExecutedAgreement::class, 'lead_id');
    }


    public function proposals()
    {
        // return $this->belongsTo('App\Role');
        return $this->hasMany(LeadProposal::class, 'lead_id')->orderBy('id', 'desc');
    }

    public function latest_proposals()
    {
        // return $this->belongsTo('App\Role');
        return $this->hasOne(LeadProposal::class, 'lead_id')->orderBy('id', 'desc');
    }

    public function assigned_to_user()
    {
        // return $this->belongsTo('App\Role');
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function requirements()
    {
        // return $this->belongsTo('App\Role');
        return $this->hasOne(RequirementsMap::class, 'lead_id')->orderBy('id', 'desc');
    }

    public function legal_user()
    {
        // return $this->belongsTo('App\Role');
        return $this->hasOne(User::class, 'id', 'legal_user_id');
    }

    public function finance_user()
    {
        // return $this->belongsTo('App\Role');
        return $this->hasOne(User::class, 'id', 'finance_user_id');
    }
}
