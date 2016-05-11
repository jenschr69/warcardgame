<?php
class Deck {
	private $cards = [];

	function __construct () {
		// Loop for each type
		$maxType = 4;
		$maxValue = 14;
		$cardId = 0;

		for ($type= 0; $type  < $maxType; $type++) {

			for ($value=2; $value  <= $maxValue; $value++) {
				$this-> cards[] = new Card($cardId, $type, $value);
				$cardId++;
			}
		}	
	}

	function printDeck() {
		foreach($this->cards as $card) {
			$card -> printCard();
		}
	}		
}
?>