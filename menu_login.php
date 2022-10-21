<?php
include 'koneksi.php'; 
include 'kunci.php';

$username = $_POST["username"];
$password = $_POST["password"];
$password_salt = $password . $username;
$password_enk = encryptPassword($password_salt);

$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password_enk' LIMIT 1";
$data = mysqli_query($conn, $sql);
if ($data->num_rows > 0) {
    $row = mysqli_fetch_assoc($data);
    session_start();
    $_SESSION["id"] = $row['id'];
    echo"<script>
            window.alert('Login berhasil');
            window.location.href='terima.php';
         </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>