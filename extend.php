<?php
use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return (new Extend\Formatter)
        ->configure(function (Configurator $config){
            $config->BBCodes->addCustom(
                '[tieba={TEXT1}]',
                '<img src="http://img.wvbforum.xyz/tieba/{TEXT1}.png"/>',
            );
        });