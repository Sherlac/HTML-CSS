<?php 

// On recupere les variables fournies par l'utilisateur dans le formulaire
$objet = $_POST['objet'];
$message = $_POST['message'];
$prenom = $_POST['prenom'];
$name = $_POST['nom'];
$email = $_POST['email'];

// Dans le cas où les lignes du message comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
$message = wordwrap($message, 70, "\r\n");

// On definit les variables utilisées comme parametres de la fonction mail() 
$destinataire_mail = "contact@charles-mariot.fr";
$objet_mail = "Formulaire Contact / charles-mariot.fr";
$contenu_mail="Message envoyé par $prenom $name ,\n
 À partir du formulaire de contact de charles-mariot.fr, \n
 Son adresse email est : $email \n\n\n Objet : $objet \n\n Message : $message";

//On utilise la fonction mail() pour envoyer le contenu du fornulaire à mon adresse 
mail($destinataire_mail, $objet_mail, $contenu_mail) or die("Erreur !");

//Redirection vers la page d'accueil du site
header('Location: https://charles-mariot.fr/wp-content/themes/Portfolio/message_envoye.php');

//Mettre fin au script
exit();

?>