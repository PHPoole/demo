<?php
require_once 'vendor/autoload.php';

use PHPoole\PHPoole;

$phpoole = new PHPoole('./', null, [
    'site' => [
        'title'       => "Demo blog",
        'baseline'    => 'This is a demo blog',
        'baseurl'     => 'http://localhost:8000',
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    ],
    'theme' => 'hyde'
]);
$phpoole->build();

echo "Start server http://localhost:8000\n";
echo "Ctrl-C to stop it\n";
exec('php -S localhost:8000 -t _site/ >/dev/null');