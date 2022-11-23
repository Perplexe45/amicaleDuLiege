<?php
/////////////////////////////////////
//Test connexion à la base de donnée
try {	
	$bdd = new PDO(
			'mysql:host=localhost;dbname=amicaleduliege;charset=utf8',
			'root',
			''
	);
	/* //La connexion est OK
	var_dump($bdd); */

	///////Pas de connexion//////////
	} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage);
	}


	////////////////////////////////////////
	//Afficher les données
	$reponse=$bdd->query('SELECT * FROM login');

	//////////////////////////////////////
	//Récupérer les données
	while ($login = $reponse->fetch()){
		echo $login ['nom'].' '.$login['prenom'].' '.$login['email'].' '.$login['motDePasse1'].' '.
		$login['motDePasse2'].' '.['telephone'].'<br>';
	}

?>
