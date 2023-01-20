<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <p><input type="text" name="nom" placeholder="Entrez votre nom :"></p>
    <p><input type="text" name="prenom" placeholder="Entrez votre prénom :"></p>
   <p> Avatar : <input type="file" name="avatar"></p>
   <input type="submit" value="Envoyer" name="bout">
    </form><hr>


    <?php
    var_dump($_POST);
    var_dump($_FILES);
    echo $_FILES["avatar"]["name"];
    $nom = $_POST["nom"];
    move_uploaded_file($_FILES['avatar']['tmp_name'], $_FILES['avatar']['name']);
    ?>


</body>
</html>