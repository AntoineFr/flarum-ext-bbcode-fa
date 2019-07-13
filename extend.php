<?php namespace AntoineFr\BBCode\FA;

use Flarum\Extend;
use Flarum\Extend\Formatter;
use s9e\TextFormatter\Configurator;

return (new Extend\Formatter)
    ->configure(function (Configurator $config) {
        $config->BBCodes->addCustom(
			'[FA]{IDENTIFIER}[/FA]', '<i class="fas fa-{IDENTIFIER}"></i>'
		);
    })
;
