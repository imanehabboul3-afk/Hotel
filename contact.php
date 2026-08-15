<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Contact - Riad Agadir Hotel & Resort</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>

  <!-- Header / Navigation Bar -->
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

  <!-- Bannière Titre -->
  <section class="banner">
    <h1>Contactez-nous</h1>
    <p>Nous sommes à votre disposition 24/7 pour répondre à toutes vos questions</p>
  </section>

  <!-- Section principale Contact -->
  <section class="contact-section">
    
    <p class="titre">Informations de contact</p>
    
    <div class="carte">
      <div class="cercle">
        <span><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff"><path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg></span>
      </div>
      <div class="info">
        <strong>
          <p>30 Rue Hay Raiad</p>
          <p>Agadir 82000</p>
          <p>Maroc</p>
        </strong> 
      </div>
    </div>
    
    <div class="carte">
      <div class="cercle">
        <span><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff"><path d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z"/></svg></span>
      </div>
      <div class="info">
        <strong>
          <p>+212 123 456 7898</p>
        </strong> 
        <span class="attributs">Disponible 24/7</span> 
      </div>
    </div>
    
    <div class="carte">
      <div class="cercle">
        <span><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg></span>
      </div>
      <div class="info">
        <strong>
          <p>RiadAgadir@gmail.com</p>
        </strong> 
        <span class="attributs">Réponse sous 24h</span> 
      </div>
    </div>
    
    <div class="carte">
      <div class="cercle">
        <span><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg></span>
      </div>
      <div class="info">
        <strong>
          <p>Horaires d'ouverture</p>
        </strong> 
        <span class="attributs">
          <p>Lundi - Dimanche : 24/7</p>
          <p>Service de prise en charge à l'aéroport disponible à tout moment</p>
        </span> 
      </div>
    </div>
    
    <p class="titre" style="margin-top: 30px;">Envoyez-nous un message</p>

    <!-- Message d'alerte en cas de succès -->
    <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
      <div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
        Votre message a bien été envoyé et enregistré dans notre base de données !
      </div>
    <?php endif; ?>
    
    <!-- Formulaire relié au script PHP -->
    <form class="formulaire" action="traitement_contact.php" method="POST">
      <div class="group">
        <label for="nom">Nom complet</label>
        <input id="nom" name="nom" type="text" placeholder="Votre nom" required>
      </div>
       
      <div class="group">   
        <label for="tele">Téléphone</label>
        <input id="tele" name="telephone" type="text" placeholder="Votre numéro" required>
      </div>

      <div class="group">   
        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="Votre@email.com" required>
      </div>
    
      <div class="group">
        <label for="subject">Objet</label>
        <input id="subject" name="sujet" type="text" placeholder="Demande de réservation, question..." required>
      </div>
    
      <div class="group">
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Décrivez votre demande en détail..." required></textarea>
      </div>

      <button type="submit" id="envoy">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff"><path d="M120-160v-640l760 320-760 320Zm80-120 474-200-474-200v140l240 60-240 60v140Zm0 0v-400 400Z"/></svg> 
        <span class="envoyer">Envoyer le message</span>
      </button>
    </form>

  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2026 Riad Agadir Hotel et Resort. Tous droits réservés.</p>
  </footer>

</body>
</html>