<?php
    
    //Define URL FDJ to scrap
    $urlhn = "https://www.fdj.fr/jeux/jeux-de-tirage/euromillions/resultats";
	
    //Identify
	$input = @file_get_contents($urlhn) or die("Impossible to get : $urlhn");
	$getDate = '<h3 class="dateTirage mt20 fl">(.*)<\/h3>';
	$getNumbers = '<p class="euro_num">(.*)<\/p>';
	$getChance = '<p class="euro_num_c">(.*)<\/p>';
	$getMyMillion = '<p class="tirage_my_million"><span>(.*)<\/span><\/p>';
	$getGains = '<table class="tableErgo" cellspacing="0">(.*)<\/table>';
		
	
    if(preg_match_all("/$getNumbers/siU", $input, $numbers, PREG_SET_ORDER)
        AND (preg_match_all("/$getDate/siU", $input, $date, PREG_SET_ORDER))
        AND (preg_match_all("/$getChance/siU", $input, $chance, PREG_SET_ORDER))
        AND (preg_match_all("/$getMyMillion/siU", $input, $myMillion, PREG_SET_ORDER))
        AND (preg_match_all("/$getGains/siU", $input, $gains, PREG_SET_ORDER))
      ){
        echo '<div class="list-group">';
        echo '<a href="#" class="list-group-item active text-uppercase"> Euromillions Results </a>';
		echo '<a href="#" class="list-group-item"><strong>Date : </strong>';
		echo utf8_encode($date[0][1]); echo '</a>';
		
		echo '<a href="#" class="list-group-item"><strong>Numbers : </strong>';
		echo $numbers[0][1]; echo ', ';
		echo $numbers[1][1]; echo ', ';
		echo $numbers[2][1]; echo ', ';
		echo $numbers[3][1]; echo ', ';
		echo $numbers[4][1]; echo '</a>';
		
		echo '<a href="#" class="list-group-item"><strong>Chance Number : </strong>';
		echo $chance[0][1]; echo ', ';
		echo $chance[1][1]; echo '</a>';
		
		
		echo '<a href="#" class="list-group-item"><strong>My Million : </strong>';
		echo $myMillion[0][1]; echo '</a>';
        echo '</div>';
	}
	  
	  else {
		echo "Impossible to get all elements";
	}
	
?>