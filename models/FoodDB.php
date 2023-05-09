<?php 
    require_once('db.php');

    function addFood($Food){
        $con = getConnection();
        $sql = "insert into Foods(FoodId, FoodName, Price) values('{$Food['FoodId']}','{$Food['FoodName']}', '{$Food['Price']}')";
        return $status = mysqli_query($con, $sql);
    }

    function show(){
        $con = getConnection();
        $sql = "SELECT * FROM Foods";
        return $result = mysqli_query($con, $sql);
    }
    function updateFood($Food) {
        $con = getConnection();
        $sql = "UPDATE Foods SET FoodName = '{$Food['FoodName']}', '{$Food['Price']}'  WHERE FoodName = '{$Food['FoodName']}'";
        $status = mysqli_query($con, $sql);
        mysqli_close($con);
        return $status;
    }
    
    function deleteFood($FoodId) {
        $con = getConnection();
        $sql = "DELETE FROM Foods WHERE id = $FoodId";
        $status = mysqli_query($con, $sql);
        mysqli_close($con);
        return $status;
    }

?>