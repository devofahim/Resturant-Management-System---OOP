<?php
session_start();
if(isset($_SESSION['flag'])){

?>
<html>
<head>
    <title>Add Employee</title>
    <script type="text/javascript" src="../controllers/js/AddEmployee_check.js"></script>
    <link rel="stylesheet"  href="../asset/css/add.css">
</head>
<body>
<header>
    <center><h1>Add Employees</h1></center>
</header>
<nav>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="Food.php">Food</a></li>
        <li><a href="Customer.php">Customer</a></li>
        <li><a href="Notice.php">Notice</a></li>
        <li><a href="Employee.php">Employee</a></li>
        <li><a href="Deliveryman.php">Deliverymans</a></li>
        <li><a href="view.php">Profile</a></li>
        <li> <a href="../controllers/logout.php">Logout</a> </li>
    </ul>
</nav>
    <form method="POST" action="../controllers/AddEmployeeCheck.php" >
        <table>
            
            
            <tr>
                <td>
                Employee Id 
                <input type="number" name="EmployeeId"></td>
                <td>
                Employee Name
                <input type="text" name="EmployeeName"></td>
                <td>
               Email
                <input type="text" name="Email"></td>
                <tr>
                Gender 
                <td> 
                <input type="radio" name="EmployeeGender"  value="Male"/> Male
                <input type="radio" name="EmployeeGender" value="Female"/> Female
                <input type="radio" name="EmployeeGender"  value="Other"/> Other 
                </td>
            </tr>
           
           
        
                
                <td>Contact No</td>
                <td><input type="tel" name="EmployeeContact" minlength="11" maxlength="11" </td>
            
            
                <td>Salary</td>
                <td><input type="number" name="salary" min="10000"></td>
            </tr>

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