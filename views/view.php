<?php
    session_start();
    if(isset($_SESSION['flag'])) {
        require_once('../models/userModel.php');
        $username = $_SESSION['username'];
        $row = profile($username);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="../asset/css/add.css">
    <style>
        /* Add your CSS styles here */
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        nav li {
            float: left;
        }
        nav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav li a:hover {
            background-color: #111;
        }
        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 80%;
        }
        table td, table th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        table th {
            background-color: #f2f2f2;
            color: #333;
            text-align: left;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<header>
    <h1>Profile</h1>
</header>
<nav>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="Employee.php">Employees</a></li>
        <li><a href="Customer.php">Customers</a></li>
        <li><a href="Notice.php">Notice</a></li>
        
        <li><a href="Food.php">Food</a></li>
        <li><a href="view.php">Profile</a></li>
        <li><a href="../controllers/logout.php">Logout</a></li>
    </ul>
</nav>
<table>
    <tr>
        <td>Username: <?php echo $_SESSION['username']; ?></td>
        <td>Password: <?php echo $row['password']; ?></td>
        <td>Email: <?php echo $row['email']; ?></td>
        <td>Gender: <?php echo $row['gender']; ?></td>
        <td>Date of Birth: <?php echo $row['dob']; ?></td>
        <td>Role: <?php echo $row['role']; ?></td>
    </tr>      
</table>
<footer>
    
</footer>  
</body>
</html>

<?php 
    }
