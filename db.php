<?php
  //connexion  
   $servername="localhost";
   $username="root";
   $password="";
   $db="registration";
    
   $connexion=mysqli_connect($servername,$username, $password,$db);

   if($connexion){
       echo "connected";
   }else{
       echo "echec";
   }
//creer database
$sql="CREATE DATABASE IF NOT EXISTS $db";
if(mysqli_query($connexion, $sql)){
    $connexion=mysqli_connect($servername,$username, $password,$db);
    $sql="CREATE TABLE IF NOT EXISTS posts(
        id INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(150) NOT NULL,
        body VARCHAR(1000) NOT NULL,
        image TEXT,
        createt_at TIMESTAMP);
    ";
    
    if(mysqli_query($connexion,$sql)){
        return $connexion;
    }else{
        echo "canot create table";
    }
}else{
    echo "error".mysqli_error($connexion);
}






?>
