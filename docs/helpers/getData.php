<?php 
    function getData($url) {
        if(@file_get_contents($url) === FALSE) {
            echo "
                <div class='error_container'>
                    <h1>This pokemon is still a mystery.</h1>
                    <h4>Try to find another pokemon!</h4>
                </div>
            ";
        } else {
            $data = file_get_contents($url);
            $res = json_decode($data, true);
            return $res;
        };
    }
?>