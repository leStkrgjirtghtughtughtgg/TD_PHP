<?php
include('db.PHP');
session_start();
if(isset($_SESSION["user"])){
    
}
$error = "";



if(isset($_POST["login"])){
    extract($_POST);
    if(!empty($username) && !empty($password)){
        $password = sha1($password);
        try {
            $req =$connection->query("SELECT * FROM users WHERE email='$usename' AND password='$password'");
            $user = $req->fetch();
            var_dump($user);
        }catch (PODException $e) {
            var_dump($e->getMessage());
        }
        
        }else{
        $error = "identifiant incorrets";
        }
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
    <p><?php echo $error; ?></p>
</body>
</html>