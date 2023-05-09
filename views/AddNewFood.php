<?php
session_start();
if(isset($_SESSION['flag'])){

?>
<html>
<head>
    <title>Add Food</title>
    <script type="text/javascript" src="../controllers/js/AddFood_check.js"></script>
   <link rel="stylesheet"  href="../asset/css/add.css">
</head>
<body>
<header>
   <center> <h1>Add Foods</h1></center>
</header>
<nav>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="Food.php">Food</a></li>
        <li><a href="Customer.php">Customer</a></li>
        <li><a href="NoticeList.php">Notice</a></li>
        <li><a href="Employee.php">Employee</a></li>
        <li><a href="view.php">Profile</a></li>
        <li> <a href="../controllers/logout.php">Logout</a> </li>
    </ul>
</nav>
    <form method="POST" action="../controllers/AddFoodCheck.php" >
        <table>
            
            
            <tr>
                <td>
                Food Id 
                <input type="number" name="FoodId"></td>
                <td>
                Food Name
                <input type="text" name="FoodName"></td>
                <td>
               Price
                <input type="text" name="Price"></td>

				<td><input type="submit" name="submit" value="Submit"></td>
            </tr> 
        
        </table>
    </form>
<footer>
    
</footer> 
			
</body>
</html>
<?php 
    }else{
        header('location: ../views/login.php'); 
    }
?>