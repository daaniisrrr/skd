<?php 
require('koneksi.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Signup</title>
</head>
 
<body>
    <div class="center">
        <h1>SIGNUP</h1>
        <form action="register.php" method="POST">
            <div class="txt_field">
            <tr>
              <td>Nomor Pendaftaran </td>
              <td><input name="nomor" type="number" id="nomor"></td>
            </tr>
            <tr>
              <td>Nama Lengkap </td>
              <td><input name="fullname" type="text" id="fullname"></td>
            </tr>
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
            <div class="signup_link">
            <button type="submit">Register Here!</button>
            </div>
        </form>
    </div>
</body>
 
</html>
