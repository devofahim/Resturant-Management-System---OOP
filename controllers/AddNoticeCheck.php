<?php	
	session_start();
	require_once('../models/NoticeDB.php');
	if(isset($_POST['submit'])){
		$NoticeId = $_POST['NoticeId'];
		$NoticeName = $_POST['NoticeName'];
		$history = $_POST['history'];
		
		if($NoticeId != null && $NoticeName != null ){
			$Notice = ['id'=>$NoticeId, 'NoticeName'=>$NoticeName , 'history'=>$history ];
			$status = AddNotice($Notice);
			// $con = getConnection();
			// $sql = "INSERT INTO Notice(id, NoticeName) VALUES ('$NoticeId','$NoticeName')";
			if($status){
				header('Location: ../views/Notice.php');
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