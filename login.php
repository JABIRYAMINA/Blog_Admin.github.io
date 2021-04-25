<?php
include('header.php');
include("connexion.php");
session_start();
if(isset($_POST['login'])){
    $name=htmlspecialchars(strtolower(trim($_POST['username'])));
    $password=md5(strtolower(trim($_POST['password'])));
    $query = "SELECT * FROM users WHERE username='$name' && password='$password'";
    if(mysqli_num_rows(mysqli_query($connexion,$query))>0){
       $_SESSION['username']=$name;
    header("location: admin.php");
    }else{
    echo "<div class='alert alert-danger'>nom ou mot de passe incorrect</div>";
    }

}  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>LogIn</title>
</head>
<body>
    <div class=container>
        <div class="header">
            <h1 class="text-white">Login</h1>
        </div>
        <form action="login.php" method="POST">
       
        <label>Username</label>
        <input type="text" name="username" required>
        <label>Password</label>
        <input type="password" name="password" required>
       <button type="submit" name="login">login</button>
        <a href="signup.php">singnup</a>
     

    
    </form>
    
    
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>  