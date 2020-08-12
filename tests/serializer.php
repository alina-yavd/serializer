#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/data.php';

$array  = getSampleArray();
$object = getSampleObject();

$json = new App\JsonSerializer();

echo "\nArray serialized to JSON:\n";
echo $json->serialize( $array );

echo "\n\nObject serialized to JSON:\n";
echo $json->serialize( $object );


$xml = new App\XmlSerializer();

echo "\n\nArray serialized to XML:\n";
echo $xml->serialize( $array );

echo "\nObject serialized to XML:\n";
echo $xml->serialize( $object );


$yaml = new App\YamlSerializer();

echo "\nArray serialized to Yaml:\n";
echo $yaml->serialize( $array );

echo "\n\nObject serialized to Yaml:\n";
echo $yaml->serialize( $object );

echo "\n";