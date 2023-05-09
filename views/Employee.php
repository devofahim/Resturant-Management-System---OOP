<?php
    session_start();
    if(isset($_SESSION['flag'])){
    require_once('../models/EmployeeDB.php');
	$result = show(); 
    
?>
<html>
<head>
    <title>Employee</title>
    <link rel="stylesheet"  href="../asset/css/users.css">
</head>
<body>
<header>
    <h1>Employee</h1>
</header>
<nav>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="Food.php">Foods</a></li>
        <li><a href="Employee.php">Employees</a></li>
        <li><a href="Notice.php">Notice</a></li>
        <li><a href="Customer.php">Customers</a></li>
        <li><a href="Deliveryman.php">Deliverymans</a></li>
        <li><a href="view.php">Profile</a></li>
        <li> <a href="../controllers/logout.php">Logout</a> </li>
    </ul>
</nav>
<table>
                        
    <tr>
        <td><a href="AddEmployee.php">Add New Employee</a><br>
        <h3><u>Employees:</u></h3></td>
    </tr>
    <tr>
        <table>
                    
            <tr align="center" >
            <th >Employee Id</th>
             <th >Employee Name</th>
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
                <!-- <a href="../controllers/EmployeeEditCheck.php?php echo $row['id']; ?>">Update</a> -->
                </td>
            </tr>
            <?php } ?>
            </tr>
        </table>
                            
                               
                                  
</table>
<footer>
   
</footer>  
</body>
</html>

<?php 
    }else{
        header('location: ../views/login.php'); 
    }
?>