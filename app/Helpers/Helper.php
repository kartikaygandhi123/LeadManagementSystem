<?php

use App\Models\LeadLog;

use App\Models\Lead;

function LeadLogger($Logdata)
{
    // dd($Logdata);
    
    $lead= Lead::where('id',$Logdata['lead_id'] )->first();
    LeadLog::create([
        'lead_id' => isset($Logdata['lead_id']) ? $Logdata['lead_id'] : null,
        'message' => isset($Logdata['message']) ? $Logdata['message'] : null,
        'lead_status' => $lead->lead_status,
        'lead_stage' => $lead->lead_stage,
        'user_id' => auth()->user()->id ,
        'lead_owner_id' => $lead->created_by,
        
          //'created_at' => isset($Logdata['created_at']) ? $Logdata['created_at'] : null,
        //'updated_at' => isset($Logdata['updated_at']) ? $Logdata['updated_at'] : null,







    ]);
}
