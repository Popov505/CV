<!DOCTYPE html>
<html lang="fr">
    <head>
      <!--Meta-->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--Title-->
      <title>CV de Ivan Delville : Développeur full stack junior - Page d'accueil</title>
      <!-- Fonts Rajdhani and Barlow -->
      <link rel="preload" href="https://fonts.googleapis.com">
      <link rel="preload" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">
      <!--Styles : CSS-->
      <link rel="preload" href="../styles/common.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <noscript><link rel="stylesheet" href="../styles/common.css"></noscript>
      <link rel="preload" href="../styles/index.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <noscript><link rel="stylesheet" href="../styles/index.css"></noscript>
      <!--Script : JS-->
      <script defer src="../scripts/index.js"></script>
    </head>

    <body>
      <!--Header-->
      <?php 
      include './header.php'
      ?>

      <main>
        
        <article class="introduction pale-theme">
          <h2>Présentation</h2>
          <section class="scroll-section">
            <p>Ayant récemment obtenu le diplôme d'état graduate développeur web et web mobile, je cherche actuellement un emploi de développeur web full stack</p>
            <ul class="scroll-div skills">
              <li class="front-skill">HTML</li>
              <li class="front-skill">CSS</li>
              <li class="front-skill">JavaScript</li>
              <li class="front-skill">Bootstrap</li>
              <li class="back-skill">PHP</li>
              <li class="back-skill">Symfony</li>
              <li class="bdd-skill">Heroku</li>
              <li class="bdd-skill">XAMPP</li>
              <li class="bdd-skill">PhpMyAdmin</li>
              <li class="bdd-skill">SQL</li>
              <li class="tool-skill">Git</li>
              <li class="tool-skill">GitHub</li>
              <li class="tool-skill">Trello</li>
              <li class="office-skill">Figma</li>
              <li class="office-skill">Suite office</li>
              <li class="office-skill">Inkscape</li>
              <li class="soft-skill">Rigueur</li>
              <li class="soft-skill">Esprit d'équipe</li>
              <li class="soft-skill">Polyvalence</li>
              <li class="soft-skill">Adaptabilité</li>
            </ul>
          </section>
          <a class="link-text" href="./about.php">En savoir plus sur mes compétences, études et expériences</a>
        </article>     

        <article class="about dark-theme">
          <h2>A propos</h2>
          <section class="about-section">
            <p>
              A travers mon parcours professionnel et mes études, 
              j'ai acquis une certaine expérience du monde de l'entreprise 
              et du développement web.
            </p>
            <img
              class="about-picture"
              src="../../images/photos/photo-ivan-surf.webp" 
              alt="Photo de Ivan Delville, développeur web full stack, en train de surfer">
          </section>
          <div class="about-buttons">
            <!-- <a class="link-text" href="./contact.php">Me contacter</a> -->
            <form
              class="cv-form"
              method="get" 
              action="../../documents/Ivan Delville FullStack.pdf"
              target="_blank">
              <button class="link-text" type="submit">Visualiser mon CV</button>
            </form>            
          </div>
          
        </article> 

        <article class="portfolio pale-theme">
          <h2>Portfolio</h2>

          <section class="carrousel">
            <h3 class="carrousel-title">Présentation des projets réalisés jusqu'à présent</h3>


            <button class='button' id='previous_button'>&#10096;</button>

            <div class="slide">
              <img 
                class="image" 
                src="../../images/illustrations/illustration-croisty-bats.webp" 
                alt="Illustation du site du club de roller derby : les Croisty Bats">
              <h4 class="title">Club de roller derby : les Croisty bats</h4>
            </div>

            <div class="slide">
              <img 
                class="image" 
                src="../../images/illustrations/illustration-des.webp" 
                alt="Illustation du site de jeu de dés">
              <h4 class="title">Jeu de dés</h4>
            </div>

            <div class="slide">
              <img 
                class="image" 
                src="../../images/illustrations/illustration-nutritionniste.webp" 
                alt="Illustation du site de Sandrine Coupart : diététicienne-nutritionniste">
              <h4 class="title">Sandrine Coupart : diététicienne-nutritionniste</h4>
            </div>

            <div class="slide">
              <img 
                class="image" 
                src="../../images/illustrations/illustration-garage.webp" 
                alt="Illustation du site garage de Vincent Parrot">
              <h4 class="title">Garage automobile : V.Parrot</h4>
            </div>

            <button class='button' id='next_button'>&#10097;</button>

          </section>

          <a class="link-text" href="./portfolio.php">En savoir plus sur mes projets & Compétences</a>
        
        </article>

      </main>

      <!--Footer-->
      <?php 
      include './footer.php'
      ?>
     
  </body>
</html>