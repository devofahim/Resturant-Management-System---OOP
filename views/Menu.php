<?php
    session_start();
    if(isset($_SESSION['flag'])){
    require_once('../models/FoodDb.php');
	$result = show(); 
    
?>
<html>
<head>
    <title>Foods</title>
    <link rel="stylesheet"  href="../asset/css/dashB.css">
</head>
<body>
<header>
    <h1>Foods</h1>
</header>
<nav>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="Food.php">Foods</a></li>
        <li><a href="Employee.php">Employees</a></li>
        <li><a href="Notice.php">Notice</a></li>
        <li><a href="Customer.php">Customers</a></li>
        <li><a href="view.php">Profile</a></li>
        <li> <a href="../controllers/logout.php">Logout</a> </li>
    </ul>
</nav>
<table>
                        
    <tr>
        <td><a href="AddNewFood.php">Add New Food</a><br>
        <h3><u>Courses:</u></h3></td>
    </tr>
    <tr>
        <table>
                    
            <tr align="center" >
                <th >Food Id</th>
                <th >Food Name</th>
                <th >Price</th>
                <th>Operations</th>
                
            </tr>
            <tr>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['FoodName']; ?></td>
                <td><?php echo $row['Price']; ?></td>
            
                <td>
                <a href="../controllers/deleteCheck.php?id=<?php echo $row['id']; ?>">Delete</a>
                <!-- <a href="../controllers/courseEditCheck.php?php echo $row['id']; ?>">Update</a> -->
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