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
            'prefix' => 'gms',
        ],
        'material-rounded' => [
            'path' => __DIR__.'/../resources/svg/material-rounded',
            'prefix' => 'gms_r',
        ],
        'material-sharp' => [
            'path' => __DIR__.'/../resources/svg/material-sharp',
            'prefix' => 'gms_s',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Standard-CSS-Klassen
    |--------------------------------------------------------------------------
    */
    'default_class' => '',
];