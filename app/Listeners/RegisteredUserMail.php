<?php

namespace App\Listeners;

use App\Events\RegisteredUser;
use App\Mail\Registration\ConfirmRegistration;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisteredUserMail
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
     * @param  RegisteredUser  $event
     * @return void
     */
    public function handle(RegisteredUser $event)
    {
        Mail::to($event->user->email)->send(new ConfirmRegistration($event->user));
    }
}
