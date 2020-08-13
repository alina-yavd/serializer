<?php

namespace AYS;

use XML_Serializer;

class XmlSerializer extends AbstractSerializer implements SerializerInterface {

	function serialize( $data ) {
		$options = array(
			'addDecl'        => false,
			'indent'         => '  ',
			'rootName'       => 'data',
			'defaultTagName' => '',
		);

		$xml = new XML_Serializer( $options );
		$xml->serialize( $this->getData( $data ) );

		return $xml->getSerializedData();
	}

}