<?php

use App\Models\LeadLog;

function LeadLogger($Logdata)
{
    //  dd($Logdata);
    LeadLog::create([
        'lead_id' => isset($Logdata['lead_id']) ? $Logdata['lead_id'] : null,
        'followed_up_date' => isset($Logdata['followed_up_date']) ? $Logdata['followed_up_date'] : null,
        'lead_status' => isset($Logdata['lead_status']) ? $Logdata['lead_status'] : null,
        'lead_created_at' => isset($Logdata['lead_created_at']) ? $Logdata['lead_created_at'] : null,
        'lead_updated_at' => isset($Logdata['lead_updated_at']) ? $Logdata['lead_updated_at'] : null,
        'follow_up_scheduled_date' => isset($Logdata['follow_up_scheduled_date']) ? $Logdata['follow_up_scheduled_date'] : null,
        'follow_up_date' => isset($Logdata['follow_up_date']) ? $Logdata['follow_up_date'] : null,
        'follow_up_date' => isset($Logdata['follow_up_date']) ? $Logdata['follow_up_date'] : null,
        'created_at' => isset($Logdata['created_at']) ? $Logdata['created_at'] : null,
        'updated_at' => isset($Logdata['updated_at']) ? $Logdata['updated_at'] : null,







    ]);
}
