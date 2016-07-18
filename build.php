#!/usr/local/bin/php
<?php
if (php_sapi_name() !== 'cli') {
    return;
}
date_default_timezone_set('Europe/Paris');
require_once 'vendor/autoload.php';

use PHPoole\PHPoole;
use Symfony\Component\Yaml\Yaml;

$options = Yaml::parse(file_get_contents('phpoole.yml'));

PHPoole::create($options)->build();

echo "Start server http://localhost:8000\n";
echo "Ctrl-C to stop it\n";
exec('php -S localhost:8000 -t _site');
