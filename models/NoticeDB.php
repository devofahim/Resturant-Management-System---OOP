<?php 
    require_once('db.php');

    function addNotice($Notice){
        $con = getConnection();
        $sql = "insert into Notices(id, NoticeName, history) values('{$Notice['id']}','{$Notice['NoticeName']}' , '{$Notice['history']}')";
        return $status = mysqli_query($con, $sql);
    }

    function show(){
        $con = getConnection();
        $sql = "SELECT * FROM Notices";
        return $result = mysqli_query($con, $sql);
    }
    function updateNotice($Notice) {
        $con = getConnection();
        $sql = "UPDATE Notices SET NoticeName = '{$Notice['NoticeName']}',  history = '{$Notice['history']}' WHERE Id = '{$Notice['Id']}'";
        $status = mysqli_query($con, $sql);
        mysqli_close($con);
        return $status;
    }
    
    function deleteNotice($NoticeId) {
        $con = getConnection();
        $sql = "DELETE FROM Notices WHERE id = $NoticeId";
        $status = mysqli_query($con, $sql);
        mysqli_close($con);
        return $status;
    }

?>