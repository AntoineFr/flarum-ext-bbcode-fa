<?php namespace AntoineFr\BBCode\FA;

use Flarum\Extend;
use Flarum\Extend\Formatter;
use s9e\TextFormatter\Configurator;

return (new Extend\Formatter)
    ->configure(function (Configurator $config) {
		$config->BBCodes->addCustom('[FA]{IDENTIFIER}[/FA]', '<i class="fas fa-{IDENTIFIER}"></i>'); // for compatibility reasons
		$config->BBCodes->addCustom('[FAS]{IDENTIFIER}[/FAS]', '<i class="fas fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FAR]{IDENTIFIER}[/FAR]', '<i class="far fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FAL]{IDENTIFIER}[/FAL]', '<i class="fal fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FAB]{IDENTIFIER}[/FAB]', '<i class="fab fa-{IDENTIFIER}"></i>');
    })
;
