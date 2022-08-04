<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequirementsMap extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_id',
        'business_requirement',
        'lob',
        'services',
        'area',
        'expected_closure_date',
        'location',
        'business_type',
        'expected_monthly_revenue',
        'expected_capex',
        'ebdta_percentage',
        'ebdta_amount',
        'share_business_proposal',
        'upload_requirement_documents'
    ];



    public function service()
    {
        return $this->hasOne(LobService::class, 'id');
    }
}
