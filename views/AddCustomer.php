<?php
session_start();
if(isset($_SESSION['flag'])){

?>
<html>
<head>
    <title>Add Customer</title>
    <script type="text/javascript" src="../controllers/js/AddCustomer_check.js"></script>
    <link rel="stylesheet"  href="../asset/css/add.css">
</head>
<body>
<header>
    <h1>Add Customers</h1>
</header>
<nav>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="Food.php">Food</a></li>
        <li><a href="Customer.php">Customer</a></li>
        <li><a href="Notice.php">Notice</a></li>
        <li><a href="Employee.php">Employee</a></li>
        <li><a href="Deliveryman.php">Deliveryman</a></li>
        <li><a href="view.php">Profile</a></li>
        <li> <a href="../controllers/logout.php">Logout</a> </li>
    </ul>
</nav>
    <form method="POST" action="../controllers/AddCustomerCheck.php" >
        <table>
            
            
            <tr>
                <td>
                Customer Id 
                <input type="number" name="CustomerId"></td>
                <td>
                Customer Name
                <input type="text" name="CustomerName"></td>
                <td>
               Email
                <input type="text" name="Email"></td>
                <tr>
                <td>
                Gender </td>
                <td> 
                <input type="radio" name="CustomerGender"  value="Male"/> Male
                <input type="radio" name="CustomerGender" value="Female"/> Female
                <input type="radio" name="CustomerGender"  value="Other"/> Other 
                </td>
            </tr>
           
            <tr>
                
                <td>Contact No</td>
                <td><input type="tel" name="CustomerContact" minlength="11" maxlength="11" pattern="[0]{1}[1-9]{10}" ></td>
            </tr>
            <tr>
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