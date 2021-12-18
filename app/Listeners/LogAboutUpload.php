<?php

namespace App\Listeners;

use App\Events\UserUpload;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogAboutUpload
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
     * @param  UserUpload  $event
     * @return void
     */
    public function handle(UserUpload $event)
    {
        Log::info('user uploaded file : ', ['filename' => 'images/upload/'.$event->fileName]);
    }
}
