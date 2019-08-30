<?php

function saison($firstParameter = false){
	if(!isset($_GET['saison'])){
		return false;
	}
	$output = $firstParameter == true ? '?' : '&';
	$output = $output.'saison='.$_GET['saison'];
	echo $output;
}


function currentUrlSaison($saison = 1){
	/* exemple d'usage : 
	 * <a href="<?= currentUrlSaison(4) ?>">Hiver</a> 
	*/

	$url = "?";
	
	// On fusionne le tableau get avec $saison
	$params = array_merge($_GET,array("saison" => $saison));

	// On incremente les params dans notre url
	$i = 0;
	foreach ($params as $k => $v) {

		// si ce n'est pas le premier paramètre, on ajoute un "&"
		if ($i != 0)
			$url .= "&";
		
		$url .= $k."=".$v;
		$i++;
	}

	return $url;
}