<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];
$message = $_POST["message"];

if(empty($nom) || empty($email) || empty($message)){
	die("Les champs nom email et message sont obligatoires.");
}

$to = "contact@devlaurayuki.fr";
$subject = "Nouveau message depuis le formulaire de contact de la pars de $nom ";
$body = "Nom : $nom \n Prénom : $prenom \n Email : $email \n Téléphone : $telephone \n Message : $message";

$headers = "From: contact@devlaurayuki.fr\r\n";
$headers .= "Content-Type:text/plain; charset=UTF-8\r\n";
	
if(mail($to, $subject, $body, $headers)){
	echo "Email envoyé avec succès.";
}else{
	echo "Email non envoyé, merci de retenter.";
}

}else{
	header("Location:section_contact.php?msg=Merci pour votre message");
}

?>