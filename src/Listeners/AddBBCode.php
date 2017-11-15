<?php namespace AntoineFr\BBCode\FA\Listeners;

use Formatter\Event\Configuring;
use Illuminate\Contracts\Events\Dispatcher;

class AddBBCode
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(Configuring::class, [$this, 'addBBCode']);
    }
    
    public function addBBCode(Configuring $event)
    {
        $event->configurator->BBCodes->addCustom(
            '[FA]{IDENTIFIER}[/FA]',
            '<i class="fa fa-fw fa-{IDENTIFIER}"></i>'
        );
    }
}