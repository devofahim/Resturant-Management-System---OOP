

<html>
<head>
    <title>login</title>
    <link rel="stylesheet"  href="../asset/css/login.css">
</head>
<body>
<header><h1> Online Restaurent Management System </h1></header>
<nav>
    <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="registration.php">Signup</a></li>
    </ul>
</nav>
<form method="post" action="../controllers/loginCheck.php">
    <fieldset>
        <!-- <legend>Login</legend> -->
        <table>
            <tr>
                <td>Username :</td>
                <td><input type="text" id="username" name="username" value=""></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" id="password" name="password" value=""></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Login"></td>
            </tr>
            <tr>
                <td colspan="2">
                <?php
                    if(isset($_REQUEST['msg'])){
                        if($_REQUEST['msg'] == "error"){
                            echo "Invalid username or password! " .'<br>';
                            echo"Don't have an account?". '<a href="registration.php">Register Now!</a>';
                        }else{
                            header('location: login.php');
                        }
                    }
                    if(isset($_REQUEST['nullVal'])){
                        if($_REQUEST['nullVal'] == "e"){
                            echo "Null Value! Enter username and password!" .'<br>';
                        }else{
                            header('location: login.php');
                        }
                    }