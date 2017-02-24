<?php namespace AntoineFr\BBCode\FA;

use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
    $events->subscribe(Listeners\AddBBCode::class);
};
