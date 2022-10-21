<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
 
<body>
    <div class="center">
        <h1>Login</h1>
        <form action="menu_login.php" method="post">
            <div class="txt_field">
            <tr>
              <td>Username </td>
              <td><input name="username" type="text" id="username"></td>
            </tr>
            </div>
            <div class="txt_field">
            <tr>
              <td>Password </td>
              <td><input name="password" type="password" id="password"></td>
            </tr>
            </div>
            <!-- <input type="submit" value="Login"> -->
            <div class="signup_link">
                <input type="submit" value="LOGIN">LOGIN</a>
                <br>
                Not a member? <a href="signup.php">Signup</a>
            </div>
        </form>
    </div>
</body>
 
</html>
