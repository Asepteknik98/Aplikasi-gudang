<?php
    $page = isset($_GET["page"]) ? $_GET["page"] : '';
    if($page) {
        $path = $page.".php";
        if (file_exists($path)){
            include($path);
        } else {
            echo "File not found";
        }
    } else {
        include "home.php";
    }
?>
