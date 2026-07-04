<?php

namespace App\Listeners;

use App\Events\CompanyRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendWelcomeEmailToOwner
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CompanyRegistered $event): void
    {
        //
    }
}
