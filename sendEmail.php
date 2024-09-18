<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Adresse e-mail de destination
    $to = "salma.fannich123@gmail.com";
    
    // Sujet de l'email
    $email_subject = "New Contact Form Submission: " . $subject;

    // Contenu de l'email
    $email_body = "You have received a new message from: $name\n\n".
                  "Email: $email\n\n".
                  "Message:\n$message";

    // En-têtes
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoyer l'email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message delivery failed!";
    }
}
?>
