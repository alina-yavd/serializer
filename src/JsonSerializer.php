<?php

namespace App;

class JsonSerializer extends AbstractSerializer implements SerializerInterface {

	function serialize( $data ) {
		return json_encode( $this->getData( $data ) );
	}

	function getData( $data ) {
		return is_object( $data ) ? get_object_vars( $data ) : $data;
	}

}