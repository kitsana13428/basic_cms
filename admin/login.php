<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
</head>
<body>

    <center style="margin-top: 2rem;">
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
    
</body>
</html>