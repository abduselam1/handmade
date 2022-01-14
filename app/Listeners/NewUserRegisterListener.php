<?php

namespace App\Listeners;

use App\Mail\SendVerificationCodeMail;
use App\Models\Verification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NewUserRegisterListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $code = mt_rand(10000,99999);
        Verification::create([
            'code'=>$code,
            'user_id' => $event->user->id
        ]);
        Mail::to($event->user->email)->send(new SendVerificationCodeMail($code));
    }
}
