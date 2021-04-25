
<?php
 
   include("interdit.php");
    echo "bienvenue".$_SESSION['username'];
   if(isset($_POST['login'])){
      unset($_SESSION['username']);
      header("Location:login.php");
   }
   ?>

<?php
require_once("db.php");
include('header.php');
$query="SELECT * FROM posts";
$result=mysqli_query($connexion,$query);

?>
<!--static-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>View</title>
</head>
<body>
  
    
    <main>
      <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded">View</h1>
        <div class="d-flex justify-content-center">
      
  
     <!--table-->
<div class="d-flex table-data">
  <table class="table table-striped-table-primary">
  <thead class="thead-dark" >
  <tr>
  <th>id</th>
  <th>TITLE</th>
  <th>BODY</th>
  <th>IMAGE</th>
  <th>Created-at</th>
  </tr>

  </thead>
  <?php
  while($row=mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $titre = $row['title'];
    $description = $row['body'];
    $image = $row['image'];
    $creer = $row['createt_at'];
    ?>
<!--read-->
  <tbody id="tbody">
   
      <tr>
        <td class="text-white"><?php echo $id ?></td>
        <td class="text-white"><?php echo $titre ?></td>
        <td class="text-white"><?php echo  $description ?></td>
        <td class="text-white"><?php echo  $image ?></td>
        <td class="text-white"><?php echo $creer ?></td>
        <td><a href="edit.php?Getid=<?php echo $id ?>" class="btn btn-secondary">Edit</></a>
        <a href="delete.php?Delete=<?php echo $id ?>" class="btn btn-secondary">Delete</></a></td>
      </tr>
      
      <?php }   ?>
      </tr>
  </tbody>
  </table>
 </div>
  </div>
</main>

<!--bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>    
</body>
</html>