<?php
include('header.php');
    include("connexion.php");
    if(isset($_POST['register'])){
     
        $name=htmlspecialchars(strtolower(trim($_POST['username'])));
        $email=htmlspecialchars(strtolower(trim($_POST['email'])));
        $password=md5($_POST['password']);
        $confirmation=md5($_POST['confirmation']);
    if($password == $confirmation){
        $query = "INSERT INTO users(username, email ,password ,confirmation) VALUES ('$name','$email','$password','$confirmation')";
        mysqli_query($connexion,$query);
    }else{
        echo 'Faux password';
    } 
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>
<body>
<div class=container>
        <div class="header">
            <h1 class="text-white">Sign in</h1>
        </div>
    <form action="" method="POST">
        <label>Username</label>
        <input type="text" name="username" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Password</label>
        <input type="password" name="password" required>
        <label>Confirm password</label>
        <input type="password" name="confirmation" required>
        <button type="submit" name="register">Register</button>
        Already a user<a href="login.php">Login</a>
    
    </form>
</body>
</html>