<?php	
	session_start();
    require_once('../models/userModel.php');
    if(isset($_REQUEST['submit'])){

        //print_r($_GET);
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        
        $flag = false;
        if($username == "" && $password == "") {
            header('location: ../views/login.php?nullVal=e');
        }else{
            $status = auth($username, $password);
            if($status){
                $_SESSION['flag'] = "true";
                $_SESSION['username'] = $username;;
                header('location: ../views/dashboard.php');
            }else{
                header('location: ../views/login.php?msg=error');
        
            }

            // if($flag){
            //     setcookie('flag', 'abc', time()+300, '/');
            //     $_SESSION['username'] = $username;
            //     $_SESSION['password'] = $password;
            //     //header('location: dashboard.php');
            //     $flag = false; 
            // }else{
            //     header('location: login.php?msg=error');
            // }
            

           
        }
        
    }else{
        echo "invalid request...";
    }

?>

	
