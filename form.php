<?php

// Setup variables
$errors = [];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$errorsSummary = "Un ou plusieurs champs n'est pas bien remplis...";

// Testing the data
if ( !isset($name) || $name == '' ) {
    $errors['name'] = "Oups ! Vous n'avez pas entré de nom...";
    $errors['summary'] = $errorsSummary;
}
if ( !isset($email) || $email == '' || !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
    $errors['email'] = "Oups ! Vous n'avez pas entré une adresse email valide...";
    $errors['summary'] = $errorsSummary;
}
if ( !isset($message) || $message == '' ) {
    $errors['message'] = "Oups ! Vous n'avez pas entré votre message...";
    $errors['summary'] = $errorsSummary;
}

session_start();

if ( !empty($errors) ) {
    // Display feedback
    $_SESSION['errors'] = $errors;
    $_SESSION['data'] = $_POST;
    header( 'Location: http://csiangleur.app/dev/?page_id=20#contactForm' );
} else {
    // Send the e-mail
    $headers = 'From: ' . $name . '<' . $email . '>';
    if ( mail( 'mathieu_claessens@hotmail.com', 'formulaire de contact', $message, $headers ) ) {
        $_SESSION['success'] = 'Merci ! Votre message à bien été envoyé.';
    }
    if ( !mail( 'mathieu_claessens@hotmail.com', 'formulaire de contact', $message, $headers ) ) {
        $_SESSION['errors']['summary'] = "Une erreure s'est produite lors de l'envoi. Réessayez plus tard s'il vous plait";
    }
    header( 'Location: http://csiangleur.app/dev/?page_id=20#contactForm' );
}
