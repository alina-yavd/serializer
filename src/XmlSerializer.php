<?php

namespace AYS;

use XML_Serializer;

class XmlSerializer extends AbstractSerializer implements SerializerInterface {

	private $xml;

	public function __construct() {
		$options = array(
			'addDecl'        => false,
			'indent'         => '  ',
			'rootName'       => 'data',
			'defaultTagName' => '',
		);

		$this->xml = new XML_Serializer( $options );
	}

	public function serialize( $data ) {
		$this->xml->serialize( $this->getData( $data ) );

		return $this->xml->getSerializedData();
	}

}