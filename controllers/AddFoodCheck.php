<?php	
	session_start();
	require_once('../models/FoodDB.php');
	if(isset($_POST['submit'])){
		$FoodId = $_POST['FoodId'];
		$FoodName = $_POST['FoodName'];
		$Price = $_POST['Price'];
		if($FoodId != null && $FoodName != null && $Price != null){
			$Food = ['id'=>$FoodId, 'FoodName'=>$FoodName, 'Price'=>$Price];
			$status = addFood($Food);
			// $con = getConnection();
			// $sql = "INSERT INTO Food(id, FoodName, price) VALUES ('$FoodId','$FoodName', '$price')";
			if($status){
				header('Location: ../views/Food.php');
				exit();
			}else{
				echo "Error!" ;
			}
		}else{
			echo "Fields can not be null";
		}
	}else{
		echo "Invalid request...";
	}

?>