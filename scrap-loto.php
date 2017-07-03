<?php
    
    //Define URL FDJ to scrap
    $urlhn = "https://www.fdj.fr/jeux/jeux-de-tirage/loto/resultats";
	
    //Identify
	$input = @file_get_contents($urlhn) or die("Impossible to get : $urlhn");
	$getDate = '<h3 class="dateTirage mt20 fl">(.*)<\/h3>';
	$getNumbers = '<p class="loto_boule">(.*)<\/p>';
	$getChance = '<p class="loto_boule_c">(.*)<\/p>';
	$getJoker = '<span class="pl10">(.*)<\/span>';
	$getGains = '<table class="tableErgo" cellspacing="0">(.*)<\/table>';
		
	
    if(preg_match_all("/$getNumbers/siU", $input, $numbers, PREG_SET_ORDER)
        AND (preg_match_all("/$getDate/siU", $input, $date, PREG_SET_ORDER))
        AND (preg_match_all("/$getChance/siU", $input, $chance, PREG_SET_ORDER))
        AND (preg_match_all("/$getJoker/siU", $input, $joker, PREG_SET_ORDER))
        AND (preg_match_all("/$getGains/siU", $input, $gains, PREG_SET_ORDER))
      ){
        echo '<div class="list-group">';
        echo '<a href="#" class="list-group-item active text-uppercase"> Loto Results </a>';
		echo '<a href="#" class="list-group-item"><strong>Date : </strong>';
		echo utf8_encode($date[0][1]); echo '</a>';
		
		echo '<a href="#" class="list-group-item"><strong>Numbers : </strong>';
		echo $numbers[0][1]; echo ', ';
		echo $numbers[1][1]; echo ', ';
		echo $numbers[2][1]; echo ', ';
		echo $numbers[3][1]; echo ', ';
		echo $numbers[4][1]; echo '</a>';
		
		echo '<a href="#" class="list-group-item"><strong>Chance Number : </strong>';
		echo $chance[0][1]; echo '</a>';
		
		
		echo '<a href="#" class="list-group-item"><strong>Joker : </strong>';
		echo $joker[0][1]; echo '</a>';
        echo '</div>';
	}
	  
	  else {
		echo "Impossible to get all elements";
	}
	
?>