<?php

namespace AYS;

abstract class AbstractSerializer implements SerializerInterface {

	abstract public function serialize( $data );

	protected function getData( $data ) {
		return is_object( $data ) ? get_object_vars( $data ) : $data;
	}

}