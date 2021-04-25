<?php
require_once("db.php");

  if(isset($_GET['Delete'])){
    
    $id=$_GET['Delete'];
    
    $query= " DELETE FROM posts WHERE id= '".$id."'";
    $results=mysqli_query($connexion,$query);
    if($results){

        header("location:admin.php");
    }else{
        echo "please check your query";
    }
  }
else{
    header("location:component.php");
}

?>