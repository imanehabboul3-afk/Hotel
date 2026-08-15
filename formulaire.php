<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Réservation - Riad Agadir Hotel & Resort</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto Slab', serif;
      background-color: #f8f9fa;
      color: #333;
      line-height: 1.6;
    }

    /* Header */
    header {
      background-color: #242e5a;
      padding: 15px 0;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .container {
      max-width: 85%;
      margin: auto;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      color: #fff;
      font-size: 24px;
      font-weight: 700;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo span {
      color: #C1B086;
    }

    .nav-links {
      display: flex;
      list-style: none;
      gap: 25px;
    }

    .nav-links a {
      color: #fff;
      text-decoration: none;
      font-size: 16px;
      transition: 0.3s;
    }

    .nav-links a:hover {
      color: #C1B086;
    }

    /* Banner */
    .banner {
      background: linear-gradient(rgba(36, 46, 90, 0.75), rgba(36, 46, 90, 0.75)), url('image/home1.jpg') center/cover no-repeat;
      color: white;
      text-align: center;
      padding: 60px 20px;
    }

    .banner h1 {
      font-size: 38px;
      font-weight: 500;
      margin-bottom: 10px;
    }

    .banner p {
      font-size: 18px;
      color: #ddd;
    }

    /* Form Container */
    .reservation-section {
      margin: -40px auto 60px auto;
      max-width: 900px;
      padding: 0 20px;
    }

    .booking-card {
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
      padding: 40px;
    }

    .section-title {
      position: relative;
      font-size: 20px;
      color: #242e5a;
      margin-bottom: 25px;
      padding-bottom: 10px;
      border-bottom: 2px solid #f0f0f0;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 60px;
      height: 2px;
      background-color: #C1B086;
    }

    .grid-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    .grid-3 {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-size: 14px;
      font-weight: 600;
      color: #444;
      margin-bottom: 8px;
    }

    .form-group label i {
      color: #3f9cc1;
      margin-right: 5px;
    }

    .form-control {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-family: 'Roboto Slab', serif;
      font-size: 14px;
      background-color: #fcfcfc;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      outline: none;
      border-color: #3f9cc1;
      background-color: #fff;
      box-shadow: 0 0 5px rgba(63, 156, 193, 0.3);
    }

    textarea.form-control {
      resize: vertical;
      min-height: 90px;
    }

/* Container options */
.room-options {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 15px;
  margin-bottom: 20px;
}

/* On cache l'élément radio par défaut */
.room-options input[type="radio"] {
  display: none;
}

/* Style des cartes */
.room-card {
  display: block;
  border: 2px solid #eee;
  border-radius: 8px;
  padding: 20px 15px;
  text-align: center;
  cursor: pointer;
  transition: all 0.3s ease;
  background-color: #fff;
  user-select: none;
}

.room-card:hover {
  border-color: #C1B086;
  background-color: #faf8f5;
}

.room-card h4 {
  font-size: 15px;
  color: #242e5a;
  margin-bottom: 5px;
}

.room-card p {
  font-size: 13px;
  color: #777;
}

/* Style de la carte quand l'option est sélectionnée */
.room-options input[type="radio"]:checked + .room-card {
  border-color: #C1B086;
  background-color: #faf8f5;
  box-shadow: 0 4px 12px rgba(193, 176, 134, 0.3);
  transform: translateY(-2px);
}

.room-options input[type="radio"]:checked + .room-card h4 {
  color: #C1B086;
  font-weight: 700;
}

    /* Submit Button */
    .btn-submit {
      width: 100%;
      background: #3f9cc1;
      color: white;
      padding: 16px;
      border: none;
      border-radius: 6px;
      font-size: 18px;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s;
      margin-top: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
    }

    .btn-submit:hover {
      background: #242e5a;
    }

    /* Footer */
    footer {
      background: #1a2242;
      color: white;
      text-align: center;
      padding: 20px 0;
      font-size: 14px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .grid-2, .grid-3, .room-options {
        grid-template-columns: 1fr;
      }
      .booking-card {
        padding: 25px 20px;
      }
    }
  </style>
</head>

<body>

  <!-- Navigation Bar -->
  <header>
    <div class="container">
      <nav>
        <a href="index.html" class="logo">
          <i class="fas fa-hotel"></i> Riad <span>Agadir</span>
        </a>
        <ul class="nav-links">
          <li><a href="index.html#home">Accueil</a></li>
          <li><a href="index.html#about">À propos</a></li>
          <li><a href="index.html#rooms">Chambres</a></li>
          <li><a href="index.html#restaurant">Restaurant</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Title Banner -->
  <section class="banner">
    <h1>Finaliser votre Réservation</h1>
    <p>Renseignez vos coordonnées pour confirmer votre séjour au Riad Agadir</p>
  </section>

  <!-- Form Section -->
  <section class="reservation-section">
    <div class="booking-card">
      <form action="traitement_reservation.php" method="POST">
        
        <!-- Section 1: Dates & Guests -->
        <h3 class="section-title"><i class="far fa-calendar-alt"></i> 1. Détails du séjour</h3>
        <div class="grid-2">
          <div class="form-group">
            <label for="checkin"><i class="far fa-calendar-check"></i> Date d'arrivée *</label>
            <input type="date" id="checkin" name="checkin" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="checkout"><i class="far fa-calendar-times"></i> Date de départ *</label>
            <input type="date" id="checkout" name="checkout" class="form-control" required>
          </div>
        </div>

        <div class="grid-2">
          <div class="form-group">
            <label for="adults"><i class="fas fa-user"></i> Adultes *</label>
            <select id="adults" name="adults" class="form-control" required>
              <option value="1">1 Adulte</option>
              <option value="2" selected>2 Adultes</option>
              <option value="3">3 Adultes</option>
              <option value="4">4 Adultes</option>
            </select>
          </div>
          <div class="form-group">
            <label for="children"><i class="fas fa-child"></i> Enfants</label>
            <select id="children" name="children" class="form-control">
              <option value="0" selected>0 Enfant</option>
              <option value="1">1 Enfant</option>
              <option value="2">2 Enfants</option>
              <option value="3">3 Enfants</option>
            </select>
          </div>
        </div>

  <!-- Section 2: Room Selection -->
<h3 class="section-title"><i class="fas fa-bed"></i> 2. Choix de l'hébergement</h3>
<div class="room-options">
  
  <input type="radio" id="room_deluxe" name="room_type" value="deluxe" checked>
  <label for="room_deluxe" class="room-card">
    <h4>Chambre Supérieure</h4>
    <p>129 $ / nuit</p>
  </label>

  <input type="radio" id="room_suite" name="room_type" value="suite">
  <label for="room_suite" class="room-card">
    <h4>Suite Traditionnelle</h4>
    <p>189 $ / nuit</p>
  </label>

  <input type="radio" id="room_royal" name="room_type" value="royal">
  <label for="room_royal" class="room-card">
    <h4>Suite Royale Riad</h4>
    <p>250 $ / nuit</p>
  </label>

</div>

        <!-- Section 3: Personal Information -->
        <h3 class="section-title"><i class="far fa-address-card"></i> 3. Informations personnelles</h3>
        <div class="grid-2">
          <div class="form-group">
            <label for="firstname"><i class="fas fa-user"></i> Prénom *</label>
            <input type="text" id="firstname" name="firstname" placeholder="Ex: Karim" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="lastname"><i class="fas fa-user"></i> Nom *</label>
            <input type="text" id="lastname" name="lastname" placeholder="Ex: El Amrani" class="form-control" required>
          </div>
        </div>

        <div class="grid-2">
          <div class="form-group">
            <label for="email"><i class="fas fa-envelope"></i> Adresse e-mail *</label>
            <input type="email" id="email" name="email" placeholder="nom@example.com" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="phone"><i class="fas fa-phone"></i> Numéro de téléphone *</label>
            <input type="tel" id="phone" name="phone" placeholder="+212 600 000 000" class="form-control" required>
          </div>
        </div>

        <!-- Section 4: Preferences & Special requests -->
        <h3 class="section-title"><i class="fas fa-concierge-bell"></i> 4. Options & Demandes particulières</h3>
        <div class="form-group">
          <label for="requests"><i class="fas fa-comment-alt"></i> Remarques ou demandes spéciales (Ex: Transfert aéroport, lit bébé...)</label>
          <textarea id="requests" name="requests" class="form-control" placeholder="Vos préférences de séjour..."></textarea>
        </div>

        <!-- Section 5: Payment method -->
        <h3 class="section-title"><i class="far fa-credit-card"></i> 5. Mode de paiement préférentiel</h3>
        <div class="grid-3">
          <div class="form-group">
            <label><input type="radio" name="payment" value="card" checked> Carte Bancaire (Visa / Mastercard / Amex)</label>
          </div>
          <div class="form-group">
            <label><input type="radio" name="payment" value="paypal"> PayPal</label>
          </div>
          <div class="form-group">
            <label><input type="radio" name="payment" value="hotel"> Paiement sur place à l'arrivée</label>
          </div>
        </div>

        <button type="submit" class="btn-submit">
          <i class="fas fa-check-circle"></i> CONFIRMER LA RÉSERVATION
        </button>

      </form>
    </div>
  </section>

  <footer>
    <p>&copy; 2026 Riad Agadir Hotel et Resort. Tous droits réservés.</p>
  </footer>
<script>
    document.addEventListener("DOMContentLoaded", function () {
      // 1. Récupération des paramètres passés dans l'URL
      const urlParams = new URLSearchParams(window.location.search);

      const checkinParam = urlParams.get('checkin');
      const checkoutParam = urlParams.get('checkout');
      const adultsParam = urlParams.get('adults');
      const childrenParam = urlParams.get('children');

      // 2. Injection des valeurs dans les champs du formulaire s'ils existent
      if (checkinParam) {
        document.getElementById('checkin').value = checkinParam;
      }
      if (checkoutParam) {
        document.getElementById('checkout').value = checkoutParam;
      }
      if (adultsParam) {
        document.getElementById('adults').value = adultsParam;
      }
      if (childrenParam) {
        document.getElementById('children').value = childrenParam;
      }
    });
  </script>
</body>
</html>