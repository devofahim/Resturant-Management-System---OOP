<?php 
    require_once('db.php');

    function addCourse($course){
        $con = getConnection();
        $sql = "insert into courses(id, courseName, section) values('{$course['id']}','{$course['courseName']}', '{$course['section']}')";
        return $status = mysqli_query($con, $sql);
    }

    function show(){
        $con = getConnection();
        $sql = "SELECT * FROM courses";
        return $result = mysqli_query($con, $sql);
    }
    function updateCourse($course) {
        $con = getConnection();
        $sql = "UPDATE courses SET courseName = '{$course['courseName']}', section = '{$course['section']}' WHERE courseName = '{$course['courseName']}'";
        $status = mysqli_query($con, $sql);
        mysqli_close($con);
        return $status;
    }
    
    function deleteCourse($courseId) {
        $con = getConnection();
        $sql = "DELETE FROM courses WHERE id = $courseId";
        $status = mysqli_query($con, $sql);
        mysqli_close($con);
        return $status;
    }

?>