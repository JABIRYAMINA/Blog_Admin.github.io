<?php

include("db.php");
include("header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlocPublic</title>
</head>
<body>
    <font size="7"><b><p align="center" class="bg-secondary">Blog</p></b></font>
    <table border="3" cellspacing="25" width="60%" align="center">
</body>
</html>

<?php

$sql= " SELECT * FROM posts";
$query=mysqli_query($connexion,$sql);
$total=mysqli_num_rows($query);
if($total!= 0){
    while($results=mysqli_fetch_assoc($query)){
        echo "<tr>
        <td>
            <font size='6'></font>".$results['title']."<br><img src='".$results['image']."' height='255' width='300'></font>
        </td>
        <td align='justify'>".$results['body']."</td>
        </tr>";
    }
       
    }else{

        echo "No record found";
    }
?>