<?php 
    require_once('db.php');

    function addCustomer($Customer){
        $con = getConnection();
        $sql = "insert into Customers(Customerid, CustomerName, email, Gender, contact no, salary) values('{$Customer['Customerid']}','{$Customer['CustomerName']}', '{$Customer['Email']}', '{$Customer['Gender']}' , '{$Customer['Contact no']}' , '{$Customer['Salary']}')";
        return $status = mysqli_query($con, $sql);
    }

    function show(){
        $con = getConnection();
        $sql = "SELECT * FROM Customers";
        return $result = mysqli_query($con, $sql);
    }
    function updateCustomer($Customer) {
        $con = getConnection();
        $sql = "UPDATE Customers SET CustomerName = '{$Customer['CustomerName']}', Email = '{$Customer['Email']}', Gender='{$Customer['Gender']}' , contact_no ='{$Customer['Contact no']}' , Salary ='{$Customer['Salary']}') WHERE CustomerName = '{$Customer['CustomerName']}'";
        $status = mysqli_query($con, $sql);
        
        mysqli_close($con);
        return $status;
    }
    
    function deleteCustomer($CustomerId) {
        $con = getConnection();
        $sql = "DELETE FROM Customers WHERE id = $CustomerId";
        $status = mysqli_query($con, $sql);
        mysqli_close($con);
        return $status;
    }

?>