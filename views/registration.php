
<html>
<head>
    <title>Registration</title>
    <script type="text/javascript" src="../controllers/js/regi_check.js"></script>
    <link rel="stylesheet"  href="../asset/css/reg.css">
</head>
<body>
<header><h1>Online Restaurent Management System </h1></header>
                <form method="post" onsubmit="return validateRegi()"  action="../controllers/regiCheck.php"> 
                    <fieldset>
                        
                        <table align="center">
                    
                            <tr>
                                <td>
                                    Username : 
                                    <input type="text" name="username" value="">
                                    <span id="usernameError"></span><br>
                                </td>
                            </tr>
                            
                            <tr >
                                <td>
                                    Email: 
                                    <input type="email" name="email" value="">
                                    <span id="emailError"></span><br>
                                </td>
                            
                            <tr>
                                <td>
                                    Password : 
                                    <input type="password" name="password" value="">
                                    <span id="passwordError"></span><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Confirm Password : 
                                    <input type="password" name="confirmPassword" value="">
                                    <span id="confirmPasswordError"></span><br>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                        <fieldset>
                                            <legend>Gender</legend>
                                            <input type="radio" name="gender"  value="Male"/> Male
                                            <input type="radio" name="gender" value="Female"/> Female
                                            <input type="radio" name="gender"  value="Other"/> Other <br>
                                        </fieldset>
                                        <span id="genderError"></span><br>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                        <fieldset>
                                            <legend>Date of Birth</legend>
                                            <input type="date" name="dob" min="1960-12-31" max="2008-12-31" value=""/>
                                        </fieldset>
                                        <span id="dobError"></span><br>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                        <fieldset>
                                            <legend>Role</legend>
                                            <input type="radio" name="role"  value="admin"/> Admin
                                            <input type="radio" name="role" value="student"/> Employee
                                            <input type="radio" name="role"  value="faculty"/> Customer
                                            <input type="radio" name="role"  value="staff"/> Deliveryman <br>
                                        </fieldset>
                                        <span id="roleError"></span><br> 
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                <input type="submit" name="submit" value="Submit" >            
                            
                                <!-- <a href="login.php">Login Page</a> -->
                                </td>              
                            </tr>
                            <tr>
                                <td>
                                <div class="log">Already have an account? <a href="login.php">Login now!</a></div>
                                </td>
                            </tr>
                           
                        </table>


                    </fieldset>

                </form>
    

</body>
</html>