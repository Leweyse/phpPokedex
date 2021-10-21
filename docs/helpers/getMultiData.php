<?php 
    function getMultiData($arr, $endpoint) {
        $urls = [];

        foreach ($arr as $id) {
            array_push($urls, "https://pokeapi.co/api/v2/$endpoint/$id/");
        };

        $loadJSON = function ($url) {
            $content = file_get_contents($url);
            $res = json_decode($content, true);
            return $res;
        };

        $decoded = array_map($loadJSON, $urls);

        return $decoded;
    }
?>