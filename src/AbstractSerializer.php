<?php

namespace App;

abstract class AbstractSerializer {

	abstract function serialize( $data );

	function getData( $data ) {
		return is_object( $data ) ? get_object_vars( $data ) : $data;
	}

}