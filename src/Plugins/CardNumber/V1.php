<?php

declare(strict_types=1);

namespace DragonCode\TranslationSet\Plugins\CardNumber;

use LaravelLang\Publisher\Plugins\Plugin;

class V1 extends Plugin
{
    protected ?string $vendor = 'dragon-code/card-number';

    protected string $version = '^1.0';

    public function files(): array
    {
        return [
            'card-number/1.x/card-number.json' => '{locale}.json',
        ];
    }
}
