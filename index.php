<?php session_start(); ?>
<?php header("Cache-Control: no-cache, must-revalidate"); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Fily TOURE - Étudiante en BUT MMI spécialisée en développement web et dispositifs interactifs.">
    <title>Portfolio Fily TOURE</title>
    <link rel="icon" type="image/png" href="images/faviconn-2.png">
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <!-- nav bar -->
<nav>
    <a href="#" class="logo"><span>FILY TOURE</span></a>

    <ul class="links">
        <li><a href="#accueil">Accueil</a></li>
        <li><a href="#apropos">À propos</a></li>
        <li><a href="#projet">Projets</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
    
    <i class='bx  bx-menu-alt-right' id="menu"></i> 

    <a href="#contact" class="btn-nav">Contactez-moi</a>  
</nav>

<section id="accueil">
    <img src="./images/profil.png" alt="photo de profil">  

    <div class="info-box">
        <h1>Bonjour, je suis<span> Fily !</span></h1>
        <h3>Étudiante en BUT MMI, je me spécialise en <span>développement web et dispositifs interactifs </span>à l'IUT de Cergy-Pontoise.</h3>
        <p>Passionnée par la création sous toutes ses formes, je me situe à la croisée entre le code, la communication et la création visuelle. À travers ce portfolio, je vous invite à découvrir mes projets et l’univers créatif que je façonne au fil de mon parcours. Curieuse, polyvalente et déterminée, je cherche à donner vie à des idées percutantes, alliant technique et sens esthétique, avec l’ambition de toujours apprendre et innover.</p>   
    </div>

    <div class="btn-box">
        <a href="./autres/CV- Fily-Toure.pdf" download class="btn">Télécharger mon CV</a>
        <a href="#contact" class="btn">Contactez-moi</a>
    </div>
</section>

            <!-- a propos -->

<section id="apropos">

    <div class="apropos-box">

        <div class="apropos-info">
            <h1><span>À propos de moi</span></h1>
            <p>Je suis une passionnée de création sous toutes ses formes, mêlant technologie et artisanat. Étudiante en BUT Métiers du Multimédia et de l’Internet à l’IUT de Cergy-Pontoise, je me spécialise en développement web, où je développe mes compétences techniques avec sérieux.</p>
            <p>Mais mon univers ne s’arrête pas au numérique : j’aime aussi m’exprimer à travers la couture, en créant mes propres pièces et accessoires faits main. Cette pratique nourrit mon sens du détail, de la précision et de l’esthétique, des qualités que j’intègre également dans mes projets digitaux.</p>
            <p>Mon ambition est de lier un jour ces deux univers pour créer des expériences innovantes, mêlant savoir-faire artisanal et technologies web. Ce portfolio est un moyen de vous faire découvrir mon univers, mes projets et mes ambitions, où chaque pixel et chaque création racontent une histoire.</p>
        </div>


        <!-- compétences -->
        <h2><span>Compétences</span></h2>

        <div class="competences">
            <ul>
                <li>
                    <span><i class='bx  bx-chevron-right'></i>  HTML </span>
                </li>
                <li>
                    <span><i class='bx  bx-chevron-right'></i> CSS </span>
                </li>
                <li>
                    <span><i class='bx  bx-chevron-right'></i> PHP </span>
                </li>
                <li>
                    <span><i class='bx  bx-chevron-right'></i> JavaScript </span>
                </li>
                <li>
                    <span><i class='bx  bx-chevron-right'></i> MySQL </span>
                </li>
                <li>
                    <span><i class='bx  bx-chevron-right'></i> WordPress </span>
                </li>
                <li>
                    <span><i class='bx  bx-chevron-right'></i>  After effects </span>
                </li>
                 <li>
                    <span><i class='bx  bx-chevron-right'></i>  Photoshop </span>
                </li>
                <li>
                    <span><i class='bx  bx-chevron-right'></i>  Canva </span>
                </li>
                <li>
                    <span><i class='bx  bx-chevron-right'></i>  DaVinci Resolve</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- projets -->

<section id="projet">
    <h1 class="headerprojet"><span>Projets</span></h1>

    <div class="projet-box">
        <div class="projet-card">
            <img src="./images/maraudapp.webp" alt="maraudapp">
            <h2><span>Projet 1</span></h2>
            <p>Maraud’App est une plateforme web solidaire qui simplifie l’organisation des maraudes et l’engagement citoyen en France.</p>
          <a href="https://filytr.alwaysdata.net/MARAUDAPP/index.php" class="btn-projet" target="_blank" rel="noopener noreferrer">Voir le projet</a>
        </div>

        <div class="projet-card">
            <img src="./images/sae203.png" alt="sae203">
            <h2><span>Projet 2</span></h2>
            <p>Dans le cadre de la SAÉ 203, j’ai participé au développement d’un site web dynamique reprenant un projet initié lors de la SAÉ 105.</p>
            <a href="https://sevy.alwaysdata.net/" class="btn-projet" target="_blank" rel="noopener noreferrer">Voir le projet</a>
        </div>
            
        <div class="projet-card">
            <img src="./images/simaya wordpress.png" alt="wordpress">
            <h2><span>Projet 3</span></h2>
            <p>J’ai créé ce site vitrine sous WordPress dans le cadre d’une première prise en main de l’outil. C’était une initiation me permettant de découvrir les bases de la création de site web via un tutoriel.</p>
            <a href="https://filytr.alwaysdata.net/simaya/wordpress 4/index.php/home/" class="btn-projet" target="_blank" rel="noopener noreferrer">Voir le projet</a>
        </div>

        <div class="projet-card">
            <img src="./images/sabaidi photoshop.png" alt="photoshop1">
            <h2><span>Projet 4</span></h2>
             <p>Dans le cadre de mes cours de production graphique j'avais pour consigne de concevoir une affiche et un post Instagram afin d’annoncer la sortie d’un nouveau produit ou l’ouverture d’un nouveau point de vente, réel ou fictif.</p>
              <a href="https://www.linkedin.com/posts/filytoure_photoshop-designgraphique-projetaeztudiant-activity-7327988034040119297-2D4M?utm_source=share&utm_medium=member_desktop&rcm=ACoAAENKO2oBI-NUwZ8nRzvH_x4ym0Fmer3Z31A" class="btn-projet" target="_blank" rel="noopener noreferrer">Voir le projet</a>
        </div>

        <div class="projet-card">
            <img src="./images/keiths.pastry.png" alt="keithspastry">
            <h2><span>Projet 5</span></h2>
            <p>J’ai conçu cette maquette sur Figma dans le but de réaliser par la suite ce site vitrine en React.js. Ce premier exercice m’a permis de travailler l’ergonomie, la mise en page et l’identité visuelle avant de passer au développement.</p>
            <a href="./autres/Maquette-accueil.pdf" class="btn-projet" target="_blank" rel="noopener noreferrer">Voir le projet</a>
        </div>


        <div class="projet-card">
            <img src="./images/attente.png" alt="soon">
            <h2><span>Projet 6</span></h2>
            <p>Mes projets seront bientôt disponibles ici ! Je finalise actuellement la sélection pour vous présenter le meilleur de mon travail. Merci de votre patience, la suite arrive très vite.</p>
            <div class="btn-projet" aria-disabled="true">À venir</div>
        </div>

    </div>

</section>

        <!-- formulaire contact -->


<section id="contact">

<div class="message-container">
<?php if (isset($_SESSION['success'])): ?>
    <p class="message success" id="flash-message"><?php 
        echo $_SESSION['success']; 
        unset($_SESSION['success']); // Supprime le message dès affichage
    ?></p>
<?php endif; ?>

<?php if (isset($_SESSION['error'])): ?>
    <p class="message error" id="flash-message"><?php 
        echo $_SESSION['error']; 
        unset($_SESSION['error']); // Supprime le message dès affichage
    ?></p>
<?php endif; ?>
</div>
    
    <h1 class="header"><span>Contact</span></h1>

<form action="traitement.php" method="POST">

    <div class="input-box">
        <label for="nom"><span>Nom</span></label>
        <input type="text" name="nom" placeholder="Entrez votre nom" required>
    </div>

    <div class="input-box">
        <label for="prenom"><span>Prénom</span></label>
        <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
    </div>

    <div class="input-box">
        <label for="adressemail"><span>Adresse mail</span></label>
        <input type="email" name="email" placeholder="Entrez votre adresse mail" required>
    </div>

    <div class="input-box">
        <label for="message"><span>Message</span></label>
        <textarea name="message" placeholder="Entrez votre message" required></textarea>
    </div>
    
        <button type="submit" class="bouton">Soumettre</button>
    
</form>
</section>

<footer id="footer">
  <div class="footer-container">
    <h2><span>Fily TOURE</span> Portfolio</h2>
    <p>Merci de votre visite 🌸</p>

    <ul class="footer-links">
      <li><a href="#accueil">Accueil</a></li>
      <li><a href="#apropos">À propos</a></li>
      <li><a href="#projet">Projets</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>

    <div class="social-icons">
      <a href="https://www.linkedin.com/in/filytoure" target="_blank"><i class='bx bxl-linkedin'></i></a>
      <a href="https://github.com/filyy03" target="_blank"><i class='bx bxl-github'></i></a>
    </div>

    <p class="copyright">© 2025 Fily TOURE. Tous droits réservés.</p>
  </div>
</footer>
    <script src="./scripts/script.js"></script>
</body>
</html>