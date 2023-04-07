<?php

$laPage = './View/Acceuil.php';
$titre = "Accueil";

if (isset($_GET['page'])) {		// l'URL complétée par ?page=x fournit le nom de page souhaité
	$page = $_GET['page'];
	//système qui permet de savoir la page à charger
	switch ($page) {
		case 1:
			$laPage = './Controller/LoginSoignantController.php';
			$titre = 'Login';
			break;

		case 2:
			$laPage = './View/InscriptionSoignant.php';
			$titre = 'Signin';
			break;

		case 4:
			$laPage = "./View/jeux.php"; 
			$titre = 'jeu';
			break;

		case 5:
			$laPage = "./Controller/ProfilSoignant.php"; 
			$titre = 'jeu';
			break; 

		case 6:
			$laPage = "./Controller/InscriptionSoignantController.php"; 
			$titre = 'jeu';
			break;
		
		case 7:
			$laPage = "./Controller/ConsultationController.php"; 
			$titre = 'jeu';
			break;

		case 8:
			$laPage = "./Controller/GraphController.php"; 
			$titre = 'jeu';
			break;
		
		case 9:
			$laPage = "./Controller/LoginPatientController.php";
			$titre = 'jeu';
			break;
			
		case 10:
			$laPage = "./View/UserView.php";
			$titre = 'jeu';
			break;	
			
		case 11:
			$laPage = "./Controller/InscriptionPatientController.php"; 
			$titre = 'jeu';
			break;

		case 12:
			$laPage = "./Controller/jeuxController.php"; 
			$titre = 'jeu';
			break;

		case 13:
			$laPage = "./Controller/jeux2Controller.php"; 
			$titre = 'jeu';
			break;

		case 14:
			$laPage = "./Controller/jeux3Controller.php"; 
			$titre = 'jeu';
			break;
	}
}
include($laPage);
