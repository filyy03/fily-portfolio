<?php
session_start(); // 🔹 indispensable pour stocker les messages

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /PORTFOLIO/index.php");
    exit;
}

// Fonction de nettoyage
function clean($data) {
    return htmlspecialchars(trim($data));
}

$prenom  = clean($_POST["prenom"] ?? "");
$nom     = clean($_POST["nom"] ?? "");
$email   = filter_var($_POST["email"] ?? "", FILTER_VALIDATE_EMAIL);
$message = clean($_POST["message"] ?? "");

// Vérification des champs
if (!$prenom || !$nom || !$email || !$message) {
    $_SESSION['error'] = "Veuillez remplir correctement tous les champs.";
    header("Location: /PORTFOLIO/index.php#contact");
    exit;
}

$to = "tfily954@icloud.com";
$subject = "Message depuis le portfolio";

$body = "Nouveau message :\n\n"
      . "Prénom : $prenom\n"
      . "Nom : $nom\n"
      . "Email : $email\n\n"
      . "Message :\n$message";

$headers = "From: $email\r\nReply-To: $email\r\n";

// Envoi du mail
if (mail($to, $subject, $body, $headers)) {
    $_SESSION['success'] = "Votre message a bien été envoyé !";
} else {
    $_SESSION['error'] = "Une erreur est survenue, veuillez réessayer.";
}

header("Location: /PORTFOLIO/index.php#contact");
exit;

