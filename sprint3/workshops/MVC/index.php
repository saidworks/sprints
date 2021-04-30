<?php
    require_once('./includes/Fighter.php');

    $hercules = new Fighter('🧔Héraclès',20,6);
    $neme =new Fighter('🦁Némée',11,13);

echo "Game start $hercules->name : $hercules->life vs $neme->name : $neme->life \n";
    while($hercules->life>0 or $neme->life>0){
        $hercules->fight($neme);
        $neme->fight($hercules);
        if($hercules->life>0 &&
        $neme->life<=0){ 
            echo "$hercules->name wins \n";
            $neme->life = 0;
            break;
        }
    else if($hercules->life<=0 &&
        $neme->life>0){
        $hercules->life = 0;
        echo "$neme->name wins";
        break;
        }
    }
 
    echo " $neme->name : $neme->life vs $hercules->name : $hercules->life \n";