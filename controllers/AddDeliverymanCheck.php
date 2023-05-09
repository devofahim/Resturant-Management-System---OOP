<?php	
	session_start();
	require_once('../models/DeliverymanDB.php');
	if(isset($_POST['submit'])){
		$DeliverymanId = $_POST['DeliverymanId'];
		$DeliverymanName = $_POST['DeliverymanName'];
        $Gender = $_POST['Gender'];
		$Email = $_POST['Email'];
        $ContactNo = $_POST['Contact No'];
        $Salary = $_POST['Salary'];
		if($DeliverymanId != null &&$DeliverymanName != null && $Gender != null && $Email != null && $ContactNo != null && $Salary!= null ){
			$Deliveryman = ['id'=>$DeliverymanId, 'DeliverymanName'=>$DeliverymanName, 'Gender'=> $Gender,  'Email'=> $Email, 'ContactNo'=> $ContactNo,  'Salary'=> $Salary];
			$status = AddDeliveryman($Deliveryman);
			
			if($status){
				header('Location: ../views/Deliveryman.php');
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