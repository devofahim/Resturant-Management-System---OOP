<?php	
	session_start();
	require_once('../models/CustomerDB.php');
	if(isset($_POST['submit'])){
		$CustomerId = $_POST['id'];
		$CustomerName = $_POST['CustomerName'];
        $Gender = $_POST['Gender'];
		$Email = $_POST['Email'];
        $ContactNo = $_POST['Contact No'];
        $Salary = $_POST['Salary'];
		if($CustomerId != null &&$CustomerName != null && $Gender != null && $Email != null && $ContactNo != null && $Salary!= null ){
			$Customer = ['id'=>$CustomerId, 'CustomerName'=>$CustomerName, 'Gender'=> $Gender,  'Email'=> $Email, 'ContactNo'=> $ContactNo,  'Salary'=> $Salary];
			$status = addCustomer($Customer);
			
			if($status){
				header('Location: ../views/Customer.php');
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