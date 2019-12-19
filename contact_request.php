<?php

$name = $_POST['name'];
$email = $_POST['email'];
$entreprise = $_POST['entreprise'];
$message = $_POST['message'];
$from = 'Origine : Portfolio Antho';
$to = 'anthonydr@free.fr';
$subject = 'Email du portfolio';

$body = "De : $name\n Email : $email\n Entreprise : $entreprise\n Message : $message";

if ($_POST['submit'])
{
    if (mail($to, $subject, $body, $from))
    {
        echo '<p>Merci pour votre email</p><a href="index.php">Retourner sur le portfolio</a>';
    }
    else
    {
        echo '<p>Une erreur est survenue, merci de réessayer</p>';
    }
}