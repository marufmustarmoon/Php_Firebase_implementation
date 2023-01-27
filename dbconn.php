<?php

require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory())
    ->withProjectId('data.json')
    ->withDatabaseUri('https://normal-project-480bd-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
