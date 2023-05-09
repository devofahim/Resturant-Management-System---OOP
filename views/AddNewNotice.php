<?php
session_start();
if(isset($_SESSION['flag'])){

?>
<html>
<head>
    <title>Add Notice</title>
    <script type="text/javascript" src="../controllers/js/AddNotice_check.js"></script>
    <link rel="stylesheet"  href="../asset/css/add.css">
</head>
<body>
<header>
    <center><h1>Add Notices</h1></center>
</header>
<nav>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="Food.php">Foods</a></li>
        <li><a href="Employee.php">Employeess</a></li>
        <li><a href="Notice.php">Notice</a></li>
        <li><a href="Customer.php">Customer</a></li>
        <li><a href="view.php">Profile</a></li>
        <li><a href="Deliveryman.php">Deliveryman</a></li>
        <li> <a href="../controllers/logout.php">Logout</a> </li>
    </ul>
</nav>
    <form method="POST" action="../controllers/AddNoticeCheck.php" >
        <table>
            
            
            <tr>
                <td>
                Notice Id 
                <input type="number" name="NoticeId"></td>
                <td>
                Notice Name
                <input type="text" name="NoticeName"></td>
                <td>
                history
                <input type="text" name="history"></td>
        

				<td><input type="submit" name="submit" value="Submit"></td>
            </tr> 
        
        </table>
    </form>
<footer>
    <p>Online Restaurent Management System</p>
</footer> 
			
</body>
</html>
<?php 
    }else{
        header('location: ../views/login.php'); 
    }
?>