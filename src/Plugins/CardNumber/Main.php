<?php

declare(strict_types=1);

namespace DragonCode\TranslationSet\Plugins\CardNumber;

use LaravelLang\Publisher\Plugins\Plugin;

class Main extends Plugin
{
    protected ?string $vendor = 'dragon-code/card-number';

    public function files(): array
    {
        return [
            'card-number/main/card-number.json' => '{locale}.json',
        ];
    }
}
