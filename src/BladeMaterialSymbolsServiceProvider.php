<?php

declare(strict_types=1);

namespace secondnetwork\MaterialSymbols;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeMaterialSymbolsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/blade-google-material-symbols.php',
            'blade-google-material-symbols'
        );
    }

    public function boot(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            // Lade die Konfiguration für dieses Paket
            $config = $container->make('config')->get('blade-google-material-symbols', []);

            // Hole die Set-Definitionen aus der Konfiguration
            $sets = $config['sets'] ?? [];

            // Registriere jedes Set dynamisch bei der Blade Icons Factory
            foreach ($sets as $setName => $setOptions) {
                // Füge die Standard-Klassen hinzu, falls vorhanden
                if (isset($config['default_class'])) {
                    $setOptions['class'] = $config['default_class'];
                }
                
                $factory->add($setName, $setOptions);
            }
        });

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/blade-google-material-symbols.php' => config_path('blade-google-material-symbols.php'),
            ], 'blade-google-material-symbols-config');
        }
    }
}