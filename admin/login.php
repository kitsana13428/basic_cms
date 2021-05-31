<?php

    require_once "connect.php";

    session_start();

    if (isset($_POST['login'])){
        $username = mysqli_real_escape_string($conn, $_POST['username'] );
        $password = mysqli_real_escape_string($conn, $_POST['password'] );

        $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0){
            $_SESSION['username'] = $username;
            echo "<script>alert('Login Successfully');</script>";
            header("location: index.php");
        } else {
            echo "<script>alert('Username or Password is incorrect!');</script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en" style="2rem; background-color: darkgray;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    
</head>
<body>

    <center style="margin-top:">
        <form action="login.php" method="post">
            <table width="400" border="1" align="center">
                <tr>
                    <td bgcolor="green" colspan="4" align="center">
                        <h1>Admin Login Form</h1>
                    </td>
                </tr>
                <tr>
                    <td>User Name:</td>
                    <td><input type="text" name="username"></td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                
                <tr>
                    <td colspan="4" align="center"><input type="submit" name="login" value="Login"></td>
                </tr>

            </table>
        </form>
    </center>
    <h3 align="center"><a href="../index.php">กลับหน้าหลัก!</a></h3>
    
</body>
</html>