<?php

if (isset($_GET['action'])) {

    //deconnexion
    if (isset($_GET['action']) && $_GET['action'] == 'deconnexion') {

        //activation des session
        session_start();
        //suppression des session des utilisateurs
        session_destroy();
        //redirection a la base de donnee
        header('Location: index.php');

        //mise a jours du compte
    } elseif (isset($_GET['action']) && $_GET['action'] == 'updateCompte') {
        if (isset($_POST['submit'])) {

            extract($_POST);
            if (!empty($username) and !empty($oldpassword) and !empty($newpassword) and !empty($confirmpassword)) {

                if ($newpassword == $confirmpassword) {
                        $taille = strlen($newpassword);
                        $tailPas = strlen($confirmpassword);
                        if ($taille >= 5 and $tailPas >= 5) {
                            
                                //connexion a la base de donnee
                                include('config/datab.php');
    
                                $req=$bd->prepare("SELECT * FROM admin WHERE user=?");
    
                                $req->execute(array(getAdmin()));
    
                                $repon=$req->fetch(pdo::FETCH_OBJ);
    
                                if(isset($repon->user)){
                                   
                                    $passAdmin=$repon-> password;
                                    //verification du mot de passe
                                    // password_hash($password, PASSWORD_DEFAULT);
                                    if(password_verify($oldpassword, $passAdmin)){
                                        
                                        $newpasswordHash=password_hash($newpassword, PASSWORD_DEFAULT);
                                        $update=$bd->prepare("UPDATE admin SET user=?, password=? WHERE user=?");
                                        $update->execute(array($username,$newpasswordHash,getAdmin()));

                                        //deconnexion de l'utilisateurs
                                        header('Location: admin.php?page=compte&action=deconnexion');
    
                                    }else{
                                        $alert = array('alert-error', 'ancien mot de passe  ne correspond pas au mot de passe enregistrer');
                                    }
                                }else
                                {
                                    $alert =array('alert-error', 'ce compte n\'existe pas');}
                        }else{
                            $alert = array('alert-error', 'le nouveau mot de passe doit contenir au moins 5 caractères');
                    //  $uppercase = preg_match('@[A-Z]@', $newpassword);
                    //  $lowercase = preg_match('@[a-z]@', $newpassword);
                    //  $digit = preg_match('@[0-9]@', $newpassword);

                    //  if (!$lowercase || $uppercase || $digit || (strlen($newpassword )<5)) {
                        //  $alert = array('alert-error', 'le nouveau mot de passe doit contenir des lettres majuscules 
                        //  et minuscules et des chiffres et au moins 5 caractères');
                    } 

                } else {
                    $alert = array('alert-error', 'le nouveau mot de passe et la confirmation ne sont pas identique');
                }


            } else {
                $alert = array('alert-error', 'Veuillez remplir tous les champs');
            }
        }
    } else {
        header('Location: ../admin/template/404/error404.php');
    }
}

?>