<?php

class Fruit {
	public string $name;
	public ?string $color;

	function __construct( $name, $color = null ) {
		$this->name  = $name;
		$this->color = $color;
	}

}