<?php 

try {
	$bdd = new PDO('mysql:host=localhost;dbname=projet_html;charset=utf8', 'root', '');
}

catch(Exception $e) {
	die('erreur :'.$e->getMessage());
}


//  Récupération de l'utilisateur et de son pass
$s = 'SELECT motDePasse FROM membre WHERE email="'.$_POST['email'].'"';
$req = $bdd->query($s);
$resultat = $req->fetch();


// Comparaison du pass envoyé via le formulaire avec la base

    if ($_POST['motDePasseSaisi'] == $resultat['motDePasse']) {
        session_start();
        $_SESSION['email'] = $email;
        echo 'Vous êtes connecté !';
		header('Location: membre.php');
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }


?>