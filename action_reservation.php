<?php
require_once 'db.php'; // Connexion PDO[cite: 18, 21]

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $action = $_POST['action'] ?? '';

    if ($id <= 0) {
        echo json_encode(['success' => false, 'message' => 'ID invalide.']);
        exit();
    }

    try {
        if ($action === 'accepter') {
            $stmt = $pdo->prepare("UPDATE reservations SET status = 'Acceptée' WHERE id = :id");
            $stmt->execute([':id' => $id]);
            echo json_encode(['success' => true, 'status' => 'Acceptée']);
        } elseif ($action === 'refuser') {
            $stmt = $pdo->prepare("UPDATE reservations SET status = 'Refusée' WHERE id = :id");
            $stmt->execute([':id' => $id]);
            echo json_encode(['success' => true, 'status' => 'Refusée']);
        } elseif ($action === 'supprimer') {
            $stmt = $pdo->prepare("DELETE FROM reservations WHERE id = :id");
            $stmt->execute([':id' => $id]);
            echo json_encode(['success' => true, 'deleted' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Action non reconnue.']);
        }
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}
?>