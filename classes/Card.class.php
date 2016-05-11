<?php
class Card {
	private $id;	
	private $type;
	private $value;

	function __construct($id, $type, $value) {
		$this->id = $id;
		$this->type = $type;
		$this->value = $value;
	}

	function printCard() {
		echo $this-> id . ' ';
	} 
}
?>