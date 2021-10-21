<?php 
    function infoComponent($name, $img, $id) {
        echo "
            <article>
                <h1>$name</h1>
                <img src=$img alt=''>
                <h3>$id</h3>
            </article>          
        ";
    }
?>