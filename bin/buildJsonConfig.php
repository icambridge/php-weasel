#!/usr/bin/php
<?php
namespace Weasel;

foreach (array(__DIR__ . '/../../../autoload.php', __DIR__ . '/../vendor/autoload.php') as $autoloader) {
    if (file_exists($autoloader)) {
        require_once($autoloader);
    }
}

use Symfony\Component\Console\Application;
use Weasel\Command\BuildJsonMapperJsonConfigCommand;

$application = new Application('buildJsonConfig');
$application->add(new BuildJsonMapperJsonConfigCommand());
$application->run();

