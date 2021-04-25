<?php
include("operation.php");
include('interdit.php');
include('db.php');
include('header.php');
  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>box</title>
</head>
<body>
    <main>
    <div class="container text-center">
        <h1 class="py-4 bg-secondary text-light rounded">Admin</h1>
      <div class="d-flex justify-content-center">
        <form action="" method="post" class="w-50" enctype="pultipart/form-data">
          <div class="py-2">
    
      <div class="input-group-mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text bg-warning">title</div>
          </div>

          <input type="text" name="title" class="form-control" id="inlineFormInputGroup">
      
      
      </div>
      <div class="input-group-mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text bg-warning">description</div>
          </div>
          <textarea name="body" class="form-control" id="inlineFormInputGroup"></textarea>
      
      
      </div>
      <div class="input-group-mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text bg-warning">image</div>
          </div>
          <input type="file" name="image" class="form-control" id="inlineFormInputGroup">
      
      
      </div>
      </div>
      <div class="input-group-mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text bg-warning">created_at</div>
          </div>
          <input type="time" name="createt_at" class="form-control" id="inlineFormInputGroup">
      
      
      </div>
     <button class="btn btn-success" name="create" value="upload">Create</button>
     <button class="btn btn-primary" name="read">Read</button>
  
   
    
  
     
   </div>

        </form>
   </div>

</div>

   </div>

    </main>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>