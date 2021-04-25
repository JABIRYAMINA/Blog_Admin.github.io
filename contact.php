<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--styles-->
    <link rel="stylesheet" href="style.css">
    <title>Contact avec mail</title>
</head>

<body>
    <div class="container">
        <h1 class=text-center>Contactez nous</h1>
        <form action=send.php method="POST">
            <label> Nom </label>
            <input class="form-control" type="text" name="username" placeholder="Entrer votre nom">
            <label> E-mail </label>
            <input class="form-control" type="email" name="email" placeholder="Entrer votre email">
            <label> phone </label>
            <input class="form-control" type="text" name="mobile">
            <label> Message </label>
            <textarea name="message" class="form-control" placeholder="Votre message"></textarea>
            <input class="btn btn-secondary" type="submit" value="envoyer" name="send">
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
        crossorigin="anonymous"></script>
</body>

</html>