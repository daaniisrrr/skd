<?php 
require('koneksi.php');

    $nomor = $_POST['nomor'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "Nomor Pendaftaran : $nomor <br/>";
    echo "Nama Lengkap : $nama <br/>";
    echo "Username : $username <br/>";
    echo "Password : $password <br/>";

    $hasil = mysqli_query($koneksi, "INSERT INTO `user` 
    (`nomor`, `fullname`, `username`, `password`) 
    VALUES ('$nomor', '$fullname', '$username', '$password');");

    if($hasil==1){
        echo "Data berhasil diinput ";
    } else{
        echo "Data Gagal Diinput" ;
    }
?>