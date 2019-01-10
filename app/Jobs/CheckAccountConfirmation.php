<?php

namespace App\Jobs;

use App\User;
use App\Mail\Registration\RemoveRegistration;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;


class CheckAccountConfirmation implements ShouldQueue
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
        $users = User::where('confirmation', null)->get();

        $users = $users->filter(function($user) {
            $created = $user->created_at;
            $today   = Carbon::now();

            return $created->diffInDays($today) > 10;
        });

        $users->each(function($user) {
            $this->sendEmail($user);
            $this->removeUser($user);
        });
    }

    public function sendEmail($user)
    {
        Mail::to($user->email)->send(new RemoveRegistration($user));
    }

    public function removeUser($user)
    {
        $user->delete();
    }
}
