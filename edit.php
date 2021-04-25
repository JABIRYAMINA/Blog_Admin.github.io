<?php
 
  require_once("db.php");
  
  //update
$id=$_GET['Getid'];
$qu_ery="SELECT * FROM posts WHERE id='".$id."'";
$resultats=mysqli_query($connexion,$qu_ery);
while($row=mysqli_fetch_assoc($resultats)){
    $id = $row['id'];
    $titre = $row['title'];
    $description = $row['body'];
    $image = $row['image'];
    $creer = $row['createt_at'];
}
  
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>box</title>
</head>
<body>
    <main>
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded">Update</h1>
      <div class="d-flex justify-content-center">
        <form action="update.php?id=<?php echo $id; ?>" method="post" class="w-50" enctype="multipart/form-data">
          <div class="py-2">
    
      <div class="input-group-mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text bg-warning">title</div>
          </div>

          <input type="text" name="title" value="<?php echo $titre; ?>" class="form-control" id="inlineFormInputGroup">
      
      
      </div>
      <div class="input-group-mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text bg-warning">description</div>
          </div>
          <textarea name="body" value="<?php echo $description; ?>" class="form-control" id="inlineFormInputGroup"></textarea>
      
      
      </div>
      <div class="input-group-mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text bg-warning">image</div>
          </div>
          <input type="file" name="image" value="<?php echo $image; ?>" class="form-control" id="inlineFormInputGroup">
      
      
      </div>
      </div>
      <div class="input-group-mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text bg-warning">created_at</div>
          </div>
          <input type="time" name="createt_at" value="<?php echo $creer; ?>" class="form-control" id="inlineFormInputGroup">
          <button class="btn btn-light border" name="update">Update</button>
      
      </div>
  
   
  
     
   </div>

        </form>
   </div>

   </main>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>    
</body>