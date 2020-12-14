<?php

namespace App\Jobs;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Vitals\VitalQuestion;
use App\Mail\NewMail;
use Log;
use Mail;

class SayHello implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info('Hello There');

        $my_vital_questions = VitalQuestion::all()->sortBy('priority');

        foreach ($my_vital_questions as $question) {
            Log::info($question->name);
        }

        Mail::to('exampleuser@gmail.com')->send(new NewMail());

    }
}
