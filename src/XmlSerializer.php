<?php

namespace App;

use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class XmlSerializer extends AbstractSerializer implements SerializerInterface {

	function serialize( $data ) {
		$encoders    = [ new XmlEncoder() ];
		$normalizers = [ new ObjectNormalizer() ];

		$serializer = new Serializer( $normalizers, $encoders );

		return $serializer->serialize( $data, 'xml' );
	}

}