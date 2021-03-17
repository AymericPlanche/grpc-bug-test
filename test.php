<?php

use Google\Cloud\Spanner\SpannerClient;

require __DIR__.'/vendor/autoload.php';

putenv('SPANNER_EMULATOR_HOST=emulator:9010');

$client = new SpannerClient();

$client->instance('test')->exists();
