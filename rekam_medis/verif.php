<?php 
include 'db.php';
include 'session.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // pengecekan
    if($username == 'dimas' && $password === 'password') {
        $_SESSION['loggedIn'] = true;
        header('Location: index.php');
    } else {
        $error = "Invalid credentials";
    }
}
?>