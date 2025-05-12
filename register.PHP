<?php
include('db.php');
if(isset($_POST['register'])){
    extract($_POST);
    var_dump($nom);
    $password = sha1($password);
    try {
        $req=$connection->query("INSERT INTO users (prenom,nom,email,telephone,password) VALUES ('$prenom','$nom','$email','$telephone','$password')");
        $connection->exec($req);
    } catch (PDOException $e) {
        echo "Une erreur est survenue, Réessayer ultérieurement";
    }
    echo "Inscription réussie";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form action="register.PHP" method="post">
    <input name="prenom" type="text" placeholder="Prénom">
    <br></br>
    <input name="nom" type="text" placeholder="Nom">
    <br></br>
    <input name="email" type="email" placeholder="Adresse email">
    <br></br>
    <input name="telephone" type="tel" placeholder="numéro de téléphone">
    <br></br>
    <input name="password" type="password" placeholder="mot de passe">
    <br></br>
    <input name="register" type="submit" value="inscription">
</form>
</body>
</html>