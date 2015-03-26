#!/usr/local/bin/php
<?php
require_once 'vendor/autoload.php';
use PHPoole\PHPoole;

$options = [
    'site' => [
        'title'       => "Demo blog",
        'baseline'    => 'This is a demo blog',
        'baseurl'     => 'http://localhost:8000/',
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
    ],
    'theme' => 'hyde'
];

PHPoole::create('./', null, $options)
    ->build();

echo "Start server http://localhost:8000\n";
echo "Ctrl-C to stop it\n";
//exec('php -S localhost:8000 -t _site/ >/dev/null');
exec('php -S localhost:8000 -t _site');
