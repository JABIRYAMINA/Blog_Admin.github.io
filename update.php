<?php
require_once("db.php");

if(isset($_POST['update'])){
    $id=$_GET['id'];
      $titre = $_POST['title'];
    $description = $_POST['body'];
    $image = $_POST['image'];
    $creer = $_POST['createt_at'];
    $query= " UPDATE posts SET title='".$titre."', body='".$description."',image='".$image."',createt_at='".$creer."' WHERE id='".$id."'";
    $results=mysqli_query($connexion,$query);
    if($results){
       
        header("location:component.php");
    }else{
        echo "please check your query";
    }
}
else{
    header('location:component.php');
}

?>