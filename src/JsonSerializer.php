<?php

namespace App;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class JsonSerializer extends AbstractSerializer implements SerializerInterface {

	function serialize( $data ) {
		$encoders    = [ new JsonEncoder() ];
		$normalizers = [ new ObjectNormalizer() ];

		$serializer = new Serializer( $normalizers, $encoders );

		return $serializer->serialize( $data, 'json' );
	}

}