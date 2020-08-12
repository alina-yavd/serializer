<?php

namespace App;

use Symfony\Component\Serializer\Encoder\YamlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class YamlSerializer extends AbstractSerializer implements SerializerInterface {

	function serialize( $data ) {
		$encoders    = [ new YamlEncoder() ];
		$normalizers = [ new ObjectNormalizer() ];

		$serializer = new Serializer( $normalizers, $encoders );

		return $serializer->serialize( $data, 'yaml' );
	}

}