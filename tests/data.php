<?php

require_once 'Fruit.php';

function getSampleArray() {
	return array(
		'AT' => 'Austria',
		'FR' => 'France',
		'DE' => 'Germany',
	);
}

function getSampleObject() {
	$object1 = new Fruit( 'Banana', 'yellow' );
	$object2 = new Fruit( 'Apple', 'red' );
	$object3 = new Fruit( 'Grapes', 'green' );

	$objects = array( $object1, $object2, $object3 );

	return $objects[ array_rand( $objects ) ];
}
