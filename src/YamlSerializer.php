<?php

namespace AYS;

use Symfony\Component\Yaml\Yaml;

class YamlSerializer extends AbstractSerializer implements SerializerInterface {

	function serialize( $data ) {
		return Yaml::dump( $this->getData( $data ) );
	}

}