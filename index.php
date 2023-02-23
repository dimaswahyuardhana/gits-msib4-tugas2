<?php
    session_start();
    include_once 'header.php';
    include_once 'navigation.php';

    if(isset($_REQUEST['hal'])){
        $hal = $_REQUEST['hal'];
    }
    
    if(!empty($hal)){
        include_once $hal.'.php';
    }
    else{
        include_once 'home.php';
    }
    include_once 'footer.php';
    
    
?>