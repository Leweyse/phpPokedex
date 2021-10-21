<?php 
    function getSpecieId($arr) {
        $ids = [];

        foreach ($arr as $key) {
            if (is_array($key)) {
                array_push($ids, $key['id']);
            }
        }

        return $ids;
    }
?>