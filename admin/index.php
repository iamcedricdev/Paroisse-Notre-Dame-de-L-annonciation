<?php 

session_start();
if(isset($_SESSION['admin'])) {
    header('Location: admin.php?page=acceuil');
} else {
require_once './app/login.php'; 
require_once './app/fonction.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Notre Dame de l'annonciation</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/app.css" >
</head>
<body>

    <div class="login-form-block"><br>
        <h1>Connexion</h1>
        <?php if(isset($alert)){echo alertMessage($alert);} ?>
        <form action="" method="post"><br><br>
            <input type="text" name="username" placeholder="Nom d'utilisateur" class="form-control" ><br><br>
            <input type="password" name="password" placeholder="Mot de passe" class="form-control" ><br><br>
            <input type="submit" name="submit" value="Connexion" class="btn btn-primary btn-block">
        </form>
    </div> 
</body>
</html>

<?php }?>