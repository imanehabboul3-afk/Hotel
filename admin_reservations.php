<?php
require_once 'db.php'; // Inclut la connexion PDO[cite: 18, 21]

try {
    $stmt = $pdo->query("SELECT * FROM reservations ORDER BY created_at DESC");
    $reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $reservations = [];
    $error = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Gestion des Réservations - Riad Agadir</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

  <style>
    * { padding: 0; margin: 0; box-sizing: border-box; }
    body { font-family: 'Roboto Slab', serif; background-color: #f8f9fa; color: #333; }
    header { background-color: #242e5a; padding: 15px 0; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
    .container { max-width: 95%; margin: auto; }
    nav { display: flex; justify-content: space-between; align-items: center; }
    .logo { color: #fff; font-size: 24px; font-weight: 700; text-decoration: none; display: flex; align-items: center; gap: 10px; }
    .logo span { color: #C1B086; }
    
    .banner {
      background: linear-gradient(rgba(36, 46, 90, 0.85), rgba(36, 46, 90, 0.85)), url('image/home1.jpg') center/cover no-repeat;
      color: white; text-align: center; padding: 40px 20px;
    }

    .admin-section { margin: 30px auto; padding: 0 20px; }
    .card { background: #ffffff; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); padding: 25px; overflow-x: auto; }
    
    .table-custom { width: 100%; border-collapse: collapse; margin-top: 15px; font-size: 14px; }
    .table-custom th, .table-custom td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #eee; }
    .table-custom th { background-color: #242e5a; color: #ffffff; font-weight: 600; white-space: nowrap; }
    .table-custom tr:hover { background-color: #f9f9f9; }

    .badge { padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: bold; display: inline-block; }
    .badge-en_attente { background-color: #ffeeba; color: #856404; }
    .badge-acceptee { background-color: #d4edda; color: #155724; }
    .badge-refusee { background-color: #f8d7da; color: #721c24; }

    .action-btn { padding: 6px 10px; border: none; border-radius: 4px; cursor: pointer; font-size: 12px; color: #fff; transition: opacity 0.2s; margin-right: 3px; }
    .action-btn:hover { opacity: 0.85; }
    .btn-accept { background-color: #28a745; }
    .btn-reject { background-color: #dc3545; }
    .btn-delete { background-color: #6c757d; }
    .action-container { display: flex; gap: 5px; }

    footer { background: #1a2242; color: white; text-align: center; padding: 20px 0; font-size: 14px; margin-top: 40px; }
  </style>
</head>

<body>

  <header>
    <div class="container">
      <nav>
        <a href="index.html" class="logo">
          <i class="fas fa-hotel"></i> Riad <span>Agadir</span>
        </a>
        <span style="color: #fff;"><i class="fas fa-user-shield"></i> Administration</span>
      </nav>
    </div>
  </header>

  <section class="banner">
    <h1><i class="fas fa-list-alt"></i> Demandes de Réservations</h1>
    <p>Consultez, validez, refusez ou supprimez les réservations des clients.</p>
  </section>

  <section class="container admin-section">
    <div class="card">
      <table class="table-custom">
        <thead>
          <tr>
            <th>ID</th>
            <th>Client</th>
            <th>Contact</th>
            <th>Dates</th>
            <th>Invités</th>
            <th>Hébergement</th>
            <th>Paiement</th>
            <th>Demandes</th>
            <th>Statut</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($reservations)): ?>
            <?php foreach ($reservations as $row): ?>
              <tr id="row-<?= $row['id'] ?>">
                <td><strong>#<?= htmlspecialchars($row['id']) ?></strong></td>
                <td><?= htmlspecialchars($row['firstname'] . ' ' . $row['lastname']) ?></td>
                <td>
                  <i class="fas fa-envelope"></i> <?= htmlspecialchars($row['email']) ?><br>
                  <i class="fas fa-phone"></i> <?= htmlspecialchars($row['phone']) ?>
                </td>
                <td>
                  <strong>Du:</strong> <?= htmlspecialchars($row['checkin']) ?><br>
                  <strong>Au:</strong> <?= htmlspecialchars($row['checkout']) ?>
                </td>
                <td>
                  <?= htmlspecialchars($row['adults']) ?> Ad.(s)<br>
                  <?= htmlspecialchars($row['children']) ?> Enf.(s)
                </td>
                <td>
                  <?php 
                    $rooms = [
                      'deluxe' => 'Chambre Supérieure',
                      'suite'  => 'Suite Traditionnelle',
                      'royal'  => 'Suite Royale Riad'
                    ];
                    echo htmlspecialchars($rooms[$row['room_type']] ?? $row['room_type']);
                  ?>
                </td>
                <td><?= strtoupper(htmlspecialchars($row['payment'])) ?></td>
                <td><?= htmlspecialchars($row['requests'] ?: 'Aucune') ?></td>
                <td>
                  <?php 
                    $status = $row['status'] ?? 'En attente';
                    $statusClass = strtolower(str_replace(' ', '_', $status));
                    $statusClass = str_replace('é', 'e', $statusClass);
                  ?>
                  <span id="badge-<?= $row['id'] ?>" class="badge badge-<?= $statusClass ?>">
                    <?= htmlspecialchars($status) ?>
                  </span>
                </td>
                <td>
                  <div class="action-container">
                    <button class="action-btn btn-accept" onclick="updateStatus(<?= $row['id'] ?>, 'accepter')" title="Accepter"><i class="fas fa-check"></i></button>
                    <button class="action-btn btn-reject" onclick="updateStatus(<?= $row['id'] ?>, 'refuser')" title="Refuser"><i class="fas fa-times"></i></button>
                    <button class="action-btn btn-delete" onclick="updateStatus(<?= $row['id'] ?>, 'supprimer')" title="Supprimer"><i class="fas fa-trash"></i></button>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="10" style="text-align: center; padding: 20px;">Aucune réservation enregistrée.</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </section>

  <footer>
    <p>&copy; 2026 Riad Agadir Hotel et Resort. Tous droits réservés.</p>
  </footer>

  <script>
    function updateStatus(id, action) {
      if (action === 'supprimer' && !confirm('Êtes-vous sûr de vouloir supprimer cette réservation ?')) {
        return;
      }

      const formData = new FormData();
      formData.append('id', id);
      formData.append('action', action);

      fetch('action_reservation.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          if (data.deleted) {
            document.getElementById('row-' + id).remove();
          } else {
            const badge = document.getElementById('badge-' + id);
            badge.innerText = data.status;
            badge.className = 'badge ';
            
            if (data.status === 'Acceptée') {
              badge.classList.add('badge-acceptee');
            } else if (data.status === 'Refusée') {
              badge.classList.add('badge-refusee');
            }
          }
        } else {
          alert('Erreur : ' + data.message);
        }
      })
      .catch(error => console.error('Erreur:', error));
    }
  </script>
</body>
</html>