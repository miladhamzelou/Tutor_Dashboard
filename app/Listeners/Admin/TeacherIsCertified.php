<?php

namespace Aham\Listeners\Admin;

use Aham\Events\Teacher\Certified;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TeacherIsCertified implements ShouldQueue
{
    use InteractsWithQueue;

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
     * @param  Certified  $event
     * @return void
     */
    public function handle(Certified $event)
    {
        //
    }
}