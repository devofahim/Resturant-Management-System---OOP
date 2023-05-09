<?php 
    require_once('db.php');

    function auth($username, $password){

        $con = getConnection();
        $sql = "select * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function addUser($user){
        $con = getConnection();
        $sql = "insert into users(username, password, email, gender, dob, role) values('{$user['username']}', '{$user['password']}', '{$user['email']}', '{$user['gender']}', '{$user['dob']}', '{$user['role']}')";
        
        return $status = mysqli_query($con, $sql);
    }

    function UserNameQuery($username){

        $conn = getConnection();
        $sql = "select * from users where username='{$username}'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($result);
        return $row;
    }
    function UserEmailQuery($email){
        $conn = getConnection();
        $sql = "select * from users where email='{$email}'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($result);
        return $row;
    }

    // function addCourse($course){
    //     $con = getConnection();
    //     $sql = "insert into courses(courseName, section) values('{$course['courseName']}', '{$course['section']}')";
    //     return $status = mysqli_query($con, $sql);
    // }
    // // function show($sql, $con){
    // //     // $con = getConnection();
    // //     $result = mysqli_query($con, $sql); 
    // // }
    // function updateCourse($course) {
    //     $con = getConnection();
    //     $sql = "UPDATE courses SET courseName = '{$course['courseName']}', section = '{$course['section']}' WHERE courseName = '{$course['courseName']}'";
    //     $status = mysqli_query($con, $sql);
    //     mysqli_close($con);
    //     return $status;
    // }
    
    // function deleteCourse($courseId) {
    //     $con = getConnection();
    //     $sql = "DELETE FROM courses WHERE id = $courseId";
    //     $status = mysqli_query($con, $sql);
    //     mysqli_close($con);
    //     return $status;
    //}

    function profile($username){
        $con = getConnection();
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

?>