<?php

namespace App\Providers;

use App\Mail\WelcomeNewUserMail;
use App\Providers\WelcomeNewUserEvent;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class WelcomeNewUserListener implements ShouldQueue
{
    public $user;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Handle the event.
     *
     * @param  WelcomeNewUserEvent  $event
     * @return void
     */
    public function handle(WelcomeNewUserEvent $event)
    {
        sleep(10);
        Mail::to($event->user->email)->send(new WelcomeNewUserMail($event->user));
    }
}
