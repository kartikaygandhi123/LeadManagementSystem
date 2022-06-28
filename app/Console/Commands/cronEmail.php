<?php

namespace App\Console\Commands;

use App\Models\followup;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class cronEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'email scheduling everyday three days before followup date ';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {



        $now = Carbon::now()->toDateString();
        $today = date('Y-m-d', strtotime($now));
        $first_date = Carbon::createFromFormat('Y-m-d', $now)->addDays(1);
        $second_date = Carbon::createFromFormat('Y-m-d', $now)->addDays(2);
        $third_date = Carbon::createFromFormat('Y-m-d', $now)->addDays(3);
        $first_date = date('Y-m-d', strtotime($first_date));
        $second_date = date('Y-m-d', strtotime($second_date));
        $third_date = date('Y-m-d', strtotime($third_date));

        $followups = followup::whereNotNull('Follow_up_date')->where(function ($query) use ($first_date, $second_date, $third_date) {
            $query->orWhere('Follow_up_date', $first_date)
                ->orWhere('Follow_up_date', $second_date)
                ->orWhere('Follow_up_date', $third_date);
        })->get();


        foreach ($followups as $followup) {
            // dd($followup->Remarks);
            $data = array('remarks' => $followup->Remarks, 'date' => $followup->Follow_up_date);



            // $data = [];
            // $data['remarks'] = $followup->Remarks;
            // $data['followUpDate'] = $followup->Follow_up_date;
            Mail::send('site.custom.mail', ['remarks' => $followup->Remarks, 'date' => $followup->Follow_up_date], function ($message) {

                $message->from('reachkartikay@yahoo.com', 'kartikay');

                $message->to('kartikaygandhi123@gmail.com')->subject('Notification For FollowUp');
            });
        }
    }
    // return 0;
}
