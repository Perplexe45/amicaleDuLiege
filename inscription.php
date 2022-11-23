<?php

session_start();

require_once 'src/option.php';


  if (
    !empty($_POST['firstName']) &&
    !empty($_POST['lastName']) &&
    !empty($_POST['adress']) &&
    !empty($_POST['phone']) &&
    !empty($_POST['email']) &&
    !empty($_POST['memo'])
) {
    // Connexion à la bdd
    require_once 'src/connection.php';

    // Variables
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $adress = htmlspecialchars($_POST['adress']);
    $phone = htmlspecialchars($_POST['phone']);
    $email  = htmlspecialchars($_POST['email']);
    $memo  = htmlspecialchars($_POST['memo']);

    // Ajouter un utilisateur
    

    $req = $bdd->prepare(
        'INSERT INTO occupant(nom, prenom, adresse, telephone, email, memo) VALUES(?, ?, ?, ?, ?, ?)'
    );
    $req->execute([$lastName, $firstName, $adress, $phone, $email, $memo]);

    header('location: inscription.php?success=1');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Netflix</title>
<link rel="stylesheet" type="text/css" href="design/default.css">
<link rel="icon" type="image/png" href="assets/favicon.png">
</head>

<body>
  <?php require_once 'src/footer.php'; ?>
</body>
</html>