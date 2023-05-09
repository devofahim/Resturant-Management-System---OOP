<?php 

    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'fahim';

    function getConnection(){
        global $db_host;
        global $db_user;
        global $db_pass;
        global $db_name;
        $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        return $con;
    }


?>