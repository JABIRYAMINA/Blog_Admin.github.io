<?php

require_once("db.php");
require_once("component.php");




//create button click
// butto read
if(isset($_POST['read'])){
    $titre = $_POST['title'];
    $description = $_POST['body'];
    $image = $_POST['image'];
    $creer = $_POST['createt_at'];
    $results=mysqli_query($connexion, "SELECT * FROM posts");
    if($results){
            
        header('location:admin.php');
  
}else{
echo 'please check your query';

}
    
}

//button create
if(isset($_POST['create'])){
    $titre = $_POST['title'];
    $description = $_POST['body'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $folder='..//Blog/images/';
    move_uploaded_file($tmp_name,$folder.$image);
    $creer = $_POST['createt_at'];
    $query= "INSERT INTO posts (title,body,image,createt_at) VALUES ('$titre','$description', '$image','$creer')";
    $sql=mysqli_query($connexion, $query);
        if($sql){
            
            header('location:admin.php');
      
}else{
    echo 'please check your query';

}
}

//delete

?>