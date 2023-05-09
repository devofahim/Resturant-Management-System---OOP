<?php 
    require_once('db.php');

    function auth($username, $password){

        $con = getConnection();
        $sql = "select * from USERS where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function addUser($user){
        $con = getConnection();
        $sql = "insert into USERS (username, email, password, gender, dob, role) values ('{$user['username']}', '{$user['email']}', '{$user['password']}', '{$user['gender']}', '{$user['dob']}', '{$user['role']}')"
        $status = mysqli_query($con, $sql);
        mysqli_close($con);
        return $status;
    }


?>