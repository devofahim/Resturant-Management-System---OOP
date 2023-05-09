<?php	
	
	require_once('../models/EmployeeDB.php');
	if(isset($_POST['submit'])){
		$EmployeeId = $_POST['EmployeeId'];
		$EmployeeName = $_POST['EmployeeName'];
		$Email = $_POST['Email'];
        $Gender = $_POST['gender'];
        $ContactNo = $_POST['ContactNo'];
        $Salary = $_POST['Salary'];
		if($EmployeeId != null && $EmployeeName != null && $Gender != null && $Email != null && $ContactNo != null && $Salary!= null ){
			$Employee = ['EmployeeId'=>$EmployeeId, 'EmployeeName'=>$EmployeeName, 'gender'=> $Gender,  'Email'=> $Email, 'ContactNo'=> $ContactNo,  'Salary'=> $Salary];
			$status = AddEmployee($Employee);
			
			if($status){
				header('Location: ../views/Employee.php');
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