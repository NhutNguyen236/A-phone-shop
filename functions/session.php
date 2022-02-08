<?php
    include($_SERVER['DOCUMENT_ROOT']."/store/database.php");
    
    if(!isset($_SESSION)){
        session_start();
    }
    
    // if(isset($_SESSION['login_user'])){
    //     // compare if current page is login.php then do nothing just die()
    //     if($_SERVER['QUERY_STRING'] != "/molla/category.php"){
    //         header("location: /molla/category.php");
    //         die(); 
    //     }
        
    // }

    else if(!isset($_SESSION['login_user'])){
        // compare if current page is login.php then do nothing just die()
        if($_SERVER['REQUEST_URI'] != "/molla/login.php"){
            header("location: /molla/login.php");
            die(); 
        }
    }
?>