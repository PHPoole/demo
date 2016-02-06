#!/usr/local/bin/php
<?php
date_default_timezone_set('Europe/Paris');
require_once 'vendor/autoload.php';
use PHPoole\PHPoole;

$options = [
    'site' => [
        'title'       => "PHPoole demo blog",
        'baseline'    => 'This is a demo blog',
        'baseurl'     => 'http://localhost:8000/',
        'description' => 'A demo blog based on Hyde, built with PHPoole-library.',
        'menu' => [
            'main' => [
                'download' => [
                    'id'     => 'download',
                    'name'   => 'Download',
                    'url'    => 'https://github.com/PHPoole/PHPoole-theme-hyde',
                    'weight' => 8,
                ],
                'github' => [
                    'id'     => 'github',
                    'name'   => 'GitHub project',
                    'url'    => 'https://github.com/PHPoole/PHPoole-theme-hyde',
                    'weight' => 10,
                ],
            ],
        ],
    ],
    'theme' => 'hyde',
    'paginate' => [
        'homepage' => [
            'section' => 'blog',
        ],
    ],
];

PHPoole::create('./', null, $options)
    ->build();

echo "Start server http://localhost:8000\n";
echo "Ctrl-C to stop it\n";
//exec('php -S localhost:8000 -t _site/ >/dev/null');
exec('php -S localhost:8000 -t _site');
