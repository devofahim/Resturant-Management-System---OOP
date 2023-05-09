<?php
    session_start();
    if(isset($_SESSION['flag'])){
    require_once('../models/FoodDB.php');
	$result = show(); 
    
?>
<html>
<head>
    <title>Food</title>
    <link rel="stylesheet"  href="../asset/css/add.css">
</head>
<body>
<header>
    <h1>Food</h1>
</header>
<nav>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="Food.php">Food</a></li>
        <li><a href="Employee.php">Employee</a></li>
        <li><a href="Notice.php">Notice</a></li>
        <li><a href="Customer.php">Customer</a></li>
        <li><a href="Deliveryman.php">Deliveryman</a></li>
        <li><a href="view.php">Profile</a></li>
        <li> <a href="../controllers/logout.php">Logout</a> </li>
    </ul>
</nav>
<table>
                        
    <tr>
        <td><a href="AddNewFood.php">Add New Food</a><br>
        <h3><u>Food:</u></h3></td>
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
                <td><?php echo $row['FoodId']; ?></td>
                <td><?php echo $row['FoodName']; ?></td>
                <td><?php echo $row['price']; ?></td>
                
            
                <td>
                <a href="../controllers/deleteCheck.php?id=<?php echo $row['FoodId']; ?>">Delete</a>
                <!-- <a href="../controllers/updateFoodCheck.php?php echo $row['id']; ?>">Update</a> -->
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