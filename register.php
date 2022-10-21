<?php
include 'koneksi.php'; 
include 'kunci.php';

$nomor = $_POST["nomor"];
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$password = $_POST["password"];
$password_salt = $password . $username;
$password_enk = encryptPassword($password_salt);

$sql = "INSERT INTO user (nomor, fullname, username, password) VALUES ('$nomor','$fullname','$username', '$password_enk')";

if ($conn->query($sql) == TRUE) {
    echo"<script>
            alert('user baru berhasil ditambahkan!^^');
         </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

    echo "Nomor Pendaftaran : $nomor <br/>";
    echo "Nama Lengkap : $fullname <br/>";
    echo "Username : $username <br/>";
    echo "Password : $password <br/>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<body>
   <div class="center">
   <form action="">
    <div class="signup_link">
                Lanjutkan login di sini! <a href="menu.php">LOGIN</a>
            </div>
    </form>
   </div>
</body>
</html>