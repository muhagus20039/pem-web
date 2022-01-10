<?php
include 'koneksi.php';

if(isset($_POST['btnLogin'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query = mysqli_query($konek, "SELECT * FROM tb_user WHERE username='$username'");


    if(mysqli_num_rows($query) == 1){

        $cek = mysqli_fetch_assoc($query);
        if(password_verify($password, $cek['password'])){
            session_start();
            $_SESSION['username'] = $cek['username'];
            header('location:index.php');
        }
        else{
            header('location:login.php?pesan=Username atau Password Anda Salah');
        }
    }
    else{
        header('location:login.php?pesan=Username atau Password Anda Salah');
    }
}

?>