#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/sampleData.php';

$array  = getSampleArray();
$object = getSampleObject();

$json = new AYS\JsonSerializer();

echo "\nArray serialized to JSON:\n";
echo $json->serialize( $array );

echo "\n\nObject serialized to JSON:\n";
echo $json->serialize( $object );


$xml = new AYS\XmlSerializer();

echo "\n\nArray serialized to XML:\n";
echo $xml->serialize( $array );

echo "\n\nObject serialized to XML:\n";
echo $xml->serialize( $object );


$yaml = new AYS\YamlSerializer();

echo "\n\nArray serialized to Yaml:\n";
echo $yaml->serialize( $array );

echo "\n\nObject serialized to Yaml:\n";
echo $yaml->serialize( $object );

echo "\n";