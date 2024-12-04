<?php namespace AntoineFr\BBCode\FA;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return (new Extend\Formatter)
    ->configure(function (Configurator $config) {
		$config->BBCodes->addCustom('[FA]{IDENTIFIER}[/FA]', '<i class="fas fa-{IDENTIFIER}"></i>'); // for compatibility reasons
		$config->BBCodes->addCustom('[FAS]{IDENTIFIER}[/FAS]', '<i class="fas fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FAR]{IDENTIFIER}[/FAR]', '<i class="far fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FAL]{IDENTIFIER}[/FAL]', '<i class="fal fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FAT]{IDENTIFIER}[/FAT]', '<i class="fat fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FAD]{IDENTIFIER}[/FAD]', '<i class="fad fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FADR]{IDENTIFIER}[/FADR]', '<i class="fadr fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FADL]{IDENTIFIER}[/FADL]', '<i class="fadl fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FADT]{IDENTIFIER}[/FADT]', '<i class="fadt fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FASS]{IDENTIFIER}[/FASS]', '<i class="fass fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FASR]{IDENTIFIER}[/FASR]', '<i class="fasr fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FASL]{IDENTIFIER}[/FASL]', '<i class="fasl fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FAST]{IDENTIFIER}[/FAST]', '<i class="fast fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FASDS]{IDENTIFIER}[/FASDS]', '<i class="fasds fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FASDR]{IDENTIFIER}[/FASDR]', '<i class="fasdr fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FASDL]{IDENTIFIER}[/FASDL]', '<i class="fasdl fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FASDT]{IDENTIFIER}[/FASDT]', '<i class="fasdt fa-{IDENTIFIER}"></i>');
		$config->BBCodes->addCustom('[FAB]{IDENTIFIER}[/FAB]', '<i class="fab fa-{IDENTIFIER}"></i>');
    })
;
