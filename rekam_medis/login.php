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

<?php 
include 'header.php'; ?>

<form method="post" action="login.php">
    <label>Username: <input type="text" name="username"></label><br><br>
    <label>Password: <input type="password" name="password"></label><br><br>
    <button type="submit">Login</button>
</form>

<?php include 'footer.php'; ?>