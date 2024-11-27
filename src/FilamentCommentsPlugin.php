<?php

namespace TomatoPHP\FilamentComments;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentCommentsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-comments';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): self
    {
        return new FilamentCommentsPlugin;
    }
}
