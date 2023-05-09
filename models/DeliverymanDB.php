<?php 
    require_once('db.php');

    function AddDeliveryman($Deliveryman){
        $con = getConnection();
        $sql = "insert into Deliverymans(Deliverymanid, DeliverymanName, email, Gender, contact no, salary) values('{$Deliveryman['Deliverymanid']}','{$Deliveryman['DeliverymanName']}', '{$Deliveryman['Email']}', '{$Deliveryman['Gender']}' , '{$Deliveryman['Contact no']}' , '{$Deliveryman['Salary']}')";
        return $status = mysqli_query($con, $sql);
    }

    function show(){
        $con = getConnection();
        $sql = "SELECT * FROM Deliverymans";
        return $result = mysqli_query($con, $sql);
    }
    function updateDeliveryman($Deliveryman) {
        $con = getConnection();
        $sql = "UPDATE Deliverymans SET DeliverymanName = '{$Deliveryman['DeliverymanName']}', Email = '{$Deliveryman['Email']}', Gender='{$Deliveryman['Gender']}' , contact_no ='{$Deliveryman['Contact no']}' , Salary ='{$Deliveryman['Salary']}') WHERE DeliverymanName = '{$Deliveryman['DeliverymanName']}'";
        $status = mysqli_query($con, $sql);
        
        mysqli_close($con);
        return $status;
    }
    
    function deleteDeliveryman($DeliverymanId) {
        $con = getConnection();
        $sql = "DELETE FROM Deliverymans WHERE id = $DeliverymanId";
        $status = mysqli_query($con, $sql);
        mysqli_close($con);
        return $status;
    }

?>