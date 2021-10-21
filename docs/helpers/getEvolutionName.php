<?php 
    function getEvolutionName($arr) {
        $names = [];
        $evolChain = [];

        array_push($names, $arr['chain']['species']['name']);

        foreach ($arr['chain']['evolves_to'] as $key) {
            array_push($names, $key['species']['name']);
            array_push($evolChain, $key['evolves_to']);
        }

        foreach ($evolChain as $key) {
            if (count($key) > 0) {
                array_push($names, $key[0]['species']['name']);
            }
        }

        return $names;
    }
?>