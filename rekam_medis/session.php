<?php 
session_start();

function isLoggedIn() {
     return isset($_SESSION['loggedin']) && $_SESSION['loggedIn'] === true;
}

function requireLogin() {
    if(!isLoggedIn()) {
        header("location:login.php");
    }
}