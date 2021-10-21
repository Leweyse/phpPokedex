<?php 
    function movesSection($arr) {
        $movesNum = 0;

        if (gettype($arr) != 'array') echo movesComponent($arr);
        else {
            if (count($arr) >= 4) $movesNum = 4;
            else $movesNum = count($arr);
    
            if ($movesNum == 1) echo movesComponent($arr[0]['move']['name']);
            else {
                if ($movesNum != 0) {
                    $rand_move = array_rand($arr, $movesNum);
    
                    foreach($rand_move as $idxMove) {
                        echo movesComponent($arr[$idxMove]['move']['name']);
                    }
                } else return;
            }
        }
    }

    function leftSection($arr) {
        $name = $arr['name'];
        $id = $arr['id'];
        $moves = $arr['moves'];
        $img = $arr['sprites']['front_default'];
    
        echo "<div class='top_left'>";
            infoComponent($name, $img, $id);
        echo "</div>
            <div class='bottom_left'>";
            movesSection($moves);
        echo "</div>";
    }
?>