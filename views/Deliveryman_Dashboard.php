<?php
    session_start();
    if(isset($_COOKIE['flag'])){
?>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <table border="1" width=100%>
        <tr height="100px">
            <th width=20%>
        
            </th>
            <th align="middle">
                <h3>Dashboard</h3>
            </th>
            <th width=20%>
            Logged in as <a href="view.php"><?php if(isset($_SESSION['username'])){
            echo($_SESSION['username']);
        }  ?></a> |
                <a href="logout.php">Logout</a> 
            </th>
        </tr>

        <tr >
            <td width=20%>
                <table width=100%>
                    <tr>
                        <th><h2>Account</h2></th>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li><a href="DeliverymanDashboard.php">Dashboard</a></li>
                                <li><a href="view.php">View Profile</a></li>
                                
                                <li><a href="Food.php">Food</a></li>
                                
                                <!--<li><a href="stuDetails.php">Students</a></li>-->
    
                            </ul>
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="2" align="center">
                <h1>Welcome <?=$_SESSION['username']?></h1>

            </td>
        </tr>
    </table>
</body>
</html>
<?php 
    }else{
        header('location: login.php'); 
    }
?>

