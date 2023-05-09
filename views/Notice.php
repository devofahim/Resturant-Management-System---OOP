<?php
    session_start();
    if(isset($_SESSION['flag'])){
    require_once('../models/NoticeDB.php');
	$result = show(); 
    
?>
<html>
<head>
    <title>Noticelist</title>
    <link rel="stylesheet"  href="../asset/css/notice.css">
</head>
<body>
<header>
    <h1>Noticelist</h1>
</header>
<nav>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="Food.php">Food</a></li>
        <li><a href="Employee.php">Employee</a></li>
        <li><a href="Notice.php">Notice</a></li>
        <li><a href="Customer.php">Customer</a></li>
        <li><a href="view.php">Profile</a></li>
        <li> <a href="../controllers/logout.php">Logout</a> </li>
    </ul>
</nav>
<table>
                        
    <tr>
        <td><a href="AddNewNotice.php">Add New Notice</a><br>
        <h3><u>Notices:</u></h3></td>
    </tr>
    <tr>
        <table>
                    
            <tr align="center" >
                <th >Notice Id</th>
                <th >Notice Name</th>
                <th >history</th>
                
                <th>Operations</th>
                
            </tr>
            <tr>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['NoticeName']; ?></td>
               
            
                <td>
                <a href="../controllers/deleteCheck.php?id=<?php echo $row['id']; ?>">Delete</a>
                <!-- <a href="../controllers/NoticeEditCheck.php?php echo $row['id']; ?>">Update</a> -->
                </td>
            </tr>
            <?php } ?>
            </tr>
        </table>
                            
                               
                                  
</table>
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