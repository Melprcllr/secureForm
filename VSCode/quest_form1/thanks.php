<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infos après soumission au formulaire</title>
</head>
<div>
<?php

// Vérifie si tous les champs sont remplis
if (empty($_POST['user_name']) || empty($_POST['user_firstname']) || empty($_POST['user_email']) || empty($_POST['user_number']) || empty($_POST['sujet']) || empty($_POST['user_message'])) {
    // Affiche un message d'erreur
    echo "Tous les champs sont obligatoires." . "<br>"?> <a href="form.php">Compléter le formulaire</a>
    <?php exit();
} ?>

<?php 
if (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email n'est pas valide." . "<br>" . "Veuillez renseigner une adresse email valide" .  "<br>"?> <a href="form.php">Compléter le formulaire</a>
    <?php exit();
}
?>

<?php
$name = $_POST["user_name"];
$prenom = $_POST["user_firstname"];
$courriel = $_POST["user_email"];
$numberTel = $_POST["user_number"];
$sujet = $_POST["sujet"];
$message = $_POST["user_message"];
?>

<p>
<?php
echo "Merci " .$prenom. " ". $name. " de nous avoir contacté à propos de ";
echo '"' .$sujet.'"' . "." ."<br>";
echo "Un de nos conseillers vous contactera soit à l'adresse mail ".$courriel."<br>";
echo " ou par téléphone au " .$numberTel;
echo " dans les plus brefs délais pour traiter votre demande : " ."<br>";
echo $message."<br>";
?>
</p>

</div>
 <p>
    <a href="form.php">Retour au formulaire</a>
</p>

<body>
    
</body>
</html>