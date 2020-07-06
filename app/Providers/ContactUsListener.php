<?php

namespace App\Providers;

//use App\Contact;
use App\Mail\ContactUsMail;
use App\Providers\ContactUsEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ContactUsListener implements ShouldQueue
{
//    public $contact;
//    /**
//     * Create the event listener.
//     *
//     * @return void
//     */
//    public function __construct(Contact $contact)
//    {
//        $this->contact = $contact;
//    }

    /**
     * Handle the event.
     *
     * @param  ContactUsEvent  $event
     * @return void
     */
    public function handle(ContactUsEvent $event)
    {
        sleep(10);

        Mail::to($event->contact->email)->send(new ContactUsMail($event->contact));
    }
}
