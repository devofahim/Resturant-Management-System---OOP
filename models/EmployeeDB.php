<?php 
    require_once('db.php');

    function AddEmployee($Employee){
        $con = getConnection();
        $sql = "insert into Employees(EmployeeId, EmployeeName, email, gender, contact_no, salary) values('{$Employee['Employeeid']}','{$Employee['EmployeeName']}', '{$Employee['Email']}', '{$Employee['gender']}' , '{$Employee['Contact_no']}' , '{$Employee['Salary']}')";
        return $status = mysqli_query($con, $sql);
    }

    function show(){
        $con = getConnection();
        $sql = "SELECT * FROM Employees";
        return $result = mysqli_query($con, $sql);
    }
    function updateEmployee($Employee) {
        $con = getConnection();
        $sql = "UPDATE Employees SET EmployeeName = '{$Employee['EmployeeName']}', Email = '{$Employee['Email']}', Gender='{$Employee['gender']}' , contact_no ='{$Employee['Contact_no']}' , Salary ='{$Employee['Salary']}') WHERE EmployeeName = '{$Employee['EmployeeName']}'";
        $status = mysqli_query($con, $sql);
        mysqli_close($con);
        return $status;
    }
    
    function deleteEmployee($EmployeeId) {
        $con = getConnection();
        $sql = "DELETE FROM Employees WHERE id = $EmployeeId";
        $status = mysqli_query($con, $sql);
        mysqli_close($con);
        return $status;
    }

?>