<?php

if(isset($_POST['submit']) and isset($_POST['username']) and isset($_POST['password'])) 
    {
        extract($_POST);
        if(!empty($password)and !empty($username)){
          //connexion a la base de donnee
           require_once('config/datab.php');

           $req=$bd->prepare("SELECT * FROM admin WHERE user=?");
           $req->execute(array($username));
           $repon=$req->fetch(pdo::FETCH_OBJ);
           if(isset($repon->user)){
            $userAdmin=$repon->user;
            $passAdmin=$repon-> password;
            //verification du mot de passe
             password_hash($password, PASSWORD_DEFAULT);
              if(password_verify($password, $passAdmin)){


                session_start();
                $_SESSION['admin']=$username;

                header('Location: admin.php?page=acceuil');

              }else{
                  $alert = array('alert-error', 'Mot de passe incorrect');
               }
          }else
          {
            $alert =array('alert-error', 'Nom d\'utilisateur incorrect');}
    }else{
        $alert = array('alert-error', 'Veuillez remplir tous les champs');}
    }




?>