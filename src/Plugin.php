<?php

declare(strict_types=1);

namespace DragonCode\TranslationSet;

use DragonCode\TranslationSet\Plugins\CardNumber;
use LaravelLang\Publisher\Plugins\Provider;

class Plugin extends Provider
{
    protected ?string $package_name = 'dragon-code/translation-set';

    protected string $base_path = __DIR__ . '/../';

    protected array $plugins = [
        CardNumber\Main::class,
        CardNumber\V1::class,
    ];

    public function boot(): void
    {
        $path = function_exists('lang_path') ? lang_path('vendor/custom') : resource_path('lang/vendor/custom');

        $this->loadJsonTranslationsFrom($path);
    }
}
