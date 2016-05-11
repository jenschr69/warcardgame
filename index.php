<?php
	spl_autoload_register(function ($className){
		// Include all classes in the classes directory
		include "classes/" . $className . '.class.php';
	});

	$deck = new Deck();

	$deck-> printDeck();
?>