#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/data.php';

use App\JsonSerializer;

$array  = getSampleArray();
$object = getSampleObject();

$json = new App\JsonSerializer();

echo "\nString serialized to JSON:\n";
echo $json->serialize( 'Hello world!' );

echo "\n\nArray serialized to JSON:\n";
echo $json->serialize( $array );

echo "\n\nObject serialized to JSON:\n";
echo $json->serialize( $object );
