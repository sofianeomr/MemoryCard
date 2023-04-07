<?php        
session_start();

include_once('./Model/DatabaseModel.php');
include_once('./Model/SoignantClass.php');

    // connexion à la base de données
    if(isset($_POST['submit'])){

        $email=isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
        $pass= isset($_POST['pass']) ? htmlspecialchars($_POST['pass']) : '';

        if (!empty($email) && !empty($pass)) {           
            $pass = hash('sha1',$pass);
            $managersoi = new manageSoignant();
            $managersoi->log($email,$pass);
            echo'<script>alert("Vous etes connecté !");</script>';
            include_once('./View/LoginSoignant.php');

        }
        else{
            echo'<script>alert("veuillez remplir tout les champs");</script>'; 
            include_once('./View/LoginSoignant.php');
        }
    }

    else{
        echo"<script>alert('Erreur d'authentification');</script>";
        include_once('./View/LoginSoignant.php');
    }

?>
