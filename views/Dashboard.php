<?php
    session_start();
    if(isset($_SESSION['flag'])){
?>
<html>
<head>
  <title>Dashboard</title>
    <link rel="stylesheet"  href="../asset/css/dash.css">
</head>
<body>
    <table>
        <tr>
           <th colspan="3">Dashboard</th>
        </tr>
        <tr>
            <td id="sidebar">
                <ul>
                    <li><a href="view.php">View Profile</a></li>
                    <li><a href="Notice.php">Notice</a></li>
                    <li><a href="Food.php">Food</a></li>
                    <li><a href="Employee.php">Employee</a></li>
                    <li><a href="Customer.php">Customer</a></li>
                    
                </ul>
            </td>
            <td colspan="2" align="center">
                <h1>Welcome <?=$_SESSION['username']?></h1>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                Logged in as <a href="view.php"><?php if(isset($_SESSION['username'])){
                    echo($_SESSION['username']);
                } ?></a> |
                <a href="logout.php">Logout</a>
            </td>
        </tr>
    </table>
</body>
</html>
<?php 
    } else {
        header('location: login.php'); 
    }
?>
