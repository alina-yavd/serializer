<?php

namespace AYS;

class JsonSerializer extends AbstractSerializer implements SerializerInterface {

	public function serialize( $data ) {
		return json_encode( $this->getData( $data ) );
	}

}