<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 1. Récupération et filtrage des valeurs transmises
    $nom       = htmlspecialchars(trim($_POST['nom'] ?? ''));
    $telephone = htmlspecialchars(trim($_POST['telephone'] ?? ''));
    $email     = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $sujet     = htmlspecialchars(trim($_POST['sujet'] ?? ''));
    $message   = htmlspecialchars(trim($_POST['message'] ?? ''));

    // 2. Vérification que les champs obligatoires ne sont pas vides
    if (!empty($nom) && !empty($telephone) && !empty($email) && !empty($sujet) && !empty($message)) {
        
        // 3. Préparation et exécution de la requête d'insertion
        $sql = "INSERT INTO messages (nom, telephone, email, sujet, message) 
                VALUES (:nom, :telephone, :email, :sujet, :message)";
        
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':nom'       => $nom,
                ':telephone' => $telephone,
                ':email'     => $email,
                ':sujet'     => $sujet,
                ':message'   => $message
            ]);

            // Redirection vers la page de contact avec un paramètre de succès
            header("Location: contact.php?status=success");
            exit();

        } catch (PDOException $e) {
            echo "Erreur d'insertion : " . $e->getMessage();
        }

    } else {
        echo "Veuillez remplir tous les champs.";
    }
} else {
    header("Location: contact.php");
    exit();
}
?>