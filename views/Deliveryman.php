<?php
    session_start();
    if(isset($_SESSION['flag'])){
    require_once('../models/DeliverymanDB.php');
	$result = show(); 
    
?>
<html>
<head>
    <title>Deliveryman</title>
    <link rel="stylesheet"  href="../asset/css/users.css">
</head>
<body>
<header>
    <h1>Deliveryman</h1>
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
        <td><a href="AddDeliveryman.php">Add New Deliveryman</a><br>
        <h3><u>Deliverymans:</u></h3></td>
    </tr>
    <tr>
        <table>
                    
            <tr align="center" >
            <th >Deliveryman Id</th>
             <th >Deliveryman Name</th>
             <th >Gender</th>
             <th >Email</th>
            <th >Contact No</th>
             <th >Salary</th>
                
            </tr>
            <tr>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['Gender']; ?></td>
                <td><?php echo $row['contactNo']; ?></td>
                <td><?php echo $row['Salary']; ?></td>
            
                <td>
                <a href="../controllers/deleteCheck.php?id=<?php echo $row['id']; ?>">Delete</a>
                <!-- <a href="../controllers/DeliverymanEditCheck.php?php echo $row['id']; ?>">Update</a> -->
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