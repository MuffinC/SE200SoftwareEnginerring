<?php

    session_start();
    if(empty($_SESSION['user'])) {
        
    } else {
        echo "Welcome ". $_SESSION['user'];
    }
    echo "hello";
?>