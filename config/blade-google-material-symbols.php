<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Icon Sets
    |--------------------------------------------------------------------------
    |
    | Hier werden alle Icon-Sets definiert, die dein Paket bereitstellt.
    | Der Benutzer kann diese Konfiguration später veröffentlichen und
    | die Prefixes nach Belieben anpassen.
    |
    */
    'sets' => [
        'material-outlined' => [
            'path' => __DIR__.'/../resources/svg/material-outlined',
            'prefix' => 'gmso',
        ],
        'material-rounded' => [
            'path' => __DIR__.'/../resources/svg/material-rounded',
            'prefix' => 'gmsr',
        ],
        'material-sharp' => [
            'path' => __DIR__.'/../resources/svg/material-sharp',
            'prefix' => 'gmss',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Standard-CSS-Klassen
    |--------------------------------------------------------------------------
    */
    'default_class' => '',
];