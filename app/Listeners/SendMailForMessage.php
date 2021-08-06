<?php

namespace App\Listeners;

use App\Events\SetMessage;
use App\Mail\MailMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMailForMessage
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
     * @param  SetMessage  $event
     * @return void
     */
    public function handle(SetMessage $event)
    {
        Mail::to($event->request->email)->send(new MailMessage());
    }
}
