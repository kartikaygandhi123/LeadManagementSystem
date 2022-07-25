<?php

use App\Models\LeadLog;

use App\Models\Lead;
use Illuminate\Support\Facades\DB;

use Intervention\Image\Facades\Image;
use Illuminate\Http\UploadedFile;


function LeadLogger($Logdata)
{
  // dd($Logdata);

  $lead = Lead::where('id', $Logdata['lead_id'])->first();
  LeadLog::create([
    'lead_id' => isset($Logdata['lead_id']) ? $Logdata['lead_id'] : null,
    'message' => isset($Logdata['message']) ? $Logdata['message'] : null,
    'lead_status' => $lead->Lead_Status,
    'lead_stage' => $lead->stage,
    'user_id' => auth()->user()->id,
    'lead_owner_id' => $lead->created_by,



    //'created_at' => isset($Logdata['created_at']) ? $Logdata['created_at'] : null,
    //'updated_at' => isset($Logdata['updated_at']) ? $Logdata['updated_at'] : null,

  ]);
}

function getLeadLogData($id)
{

 // $data = DB::table('lead_logs')->where('lead_id', $id)->get();
$data= LeadLog::where('lead_id', $id)->with('lead_owner')->with('lead_assigned')->get();
  return $data;
}


function getName($file)
{



  //Display File Name
  $file_name = $file->getClientOriginalName();


  //Display File Extension
  $extention = $file->getClientOriginalExtension();


  //Display File Real Path
  $file_path = $file->getRealPath();

  //Providing Name to File
  $filename = time() . $file_name;

  //Move Uploaded File

  $destinationPath = 'uploads';
  $n = $file->move($destinationPath, $filename);
  return $filename;
}
