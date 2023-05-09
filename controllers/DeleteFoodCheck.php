<?php	
	session_start();
	require_once('../models/FoodDB.php');
	if(isset($_POST['submit'])){
		$FoodId = $_POST['FoodId'];
		$FoodName = $_POST['FoodName'];
        $Price = $_POST['Price'];
		
		if($FoodId != null && $FoodName != null && $Price != null){
			$Food = ['id'=>$FoodId, 'FoodName'=>$FoodName, 'Price'=>$Price];
			$status = DeleteFood($Food);
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

	function DeleteFood($Food){
		$con = getConnection();
		$sql = "DELETE Food SET FoodName = '{$Food['FoodName']} , Price = '{$Food['price']} WHERE id = '{$Food['id']}'";
		$result = mysqli_query($con, $sql);
		if($result){
			return true;
		}else{
			return false;
		}
	}
?>
