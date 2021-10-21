<?php 
    function test_input($data) {
        $data = strtolower($data);
        $data = trim($data);
        $data = stripslashes($data);
        $data = preg_replace('/[[:space:]]+/', '-', $data);
        $data = htmlspecialchars($data);

        return $data;
    }
?>