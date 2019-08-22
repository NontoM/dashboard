<?php
session_start();
?>
<?php

function login(){
    $phone = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if ( $phone === $_SESSION['phone'] && $password === $_SESSION['password']){
        echo 'Login is successful';
        header ('Refresh: 4; URL = dashboard.php');
    }else{
        echo 'Login is not correct';
        header ('Refresh: 4; URL = index.php');

    }
    
}

login();

?>