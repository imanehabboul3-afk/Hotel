<?php
require_once 'db.php'; // Inclut la connexion PDO[cite: 18, 21]

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupération des données du formulaire[cite: 19, 21]
    $checkin   = $_POST['checkin'] ?? '';
    $checkout  = $_POST['checkout'] ?? '';
    $adults    = $_POST['adults'] ?? 1;
    $children  = $_POST['children'] ?? 0;
    $room_type = $_POST['room_type'] ?? '';
    $firstname = htmlspecialchars(trim($_POST['firstname'] ?? ''));
    $lastname  = htmlspecialchars(trim($_POST['lastname'] ?? ''));
    $email     = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone     = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $requests  = htmlspecialchars(trim($_POST['requests'] ?? ''));
    $payment   = $_POST['payment'] ?? '';

    $sql = "INSERT INTO reservations (checkin, checkout, adults, children, room_type, firstname, lastname, email, phone, requests, payment) 
            VALUES (:checkin, :checkout, :adults, :children, :room_type, :firstname, :lastname, :email, :phone, :requests, :payment)";

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':checkin'   => $checkin,
            ':checkout'  => $checkout,
            ':adults'    => $adults,
            ':children'  => $children,
            ':room_type' => $room_type,
            ':firstname' => $firstname,
            ':lastname'  => $lastname,
            ':email'     => $email,
            ':phone'     => $phone,
            ':requests'  => $requests,
            ':payment'   => $payment
        ]);

        // Redirection vers la page de confirmation[cite: 19]
       header("Location: confirmation.html?status=success");
        exit();
    } catch (PDOException $e) {
        die("Erreur d'enregistrement : " . $e->getMessage());
    }
}
?>