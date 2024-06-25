<!DOCTYPE html>
<html lang="fr">
    <head>
      <!--Meta-->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--Title-->
      <title>CV de Ivan Delville : Développeur full stack junior - Page d'accueil</title>
      <!-- Fonts Rajdhani and Barlow -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">
      <!--Styles : CSS-->
      <link rel="stylesheet" href="../styles/common.css" type="text/css">
      <link rel="stylesheet" href="../styles/portfolio.css" type="text/css">
    </head>

    <body>
      <!--Header-->
      <?php 
        include './header.php'
      ?>

      <main>
        <article class="portfolio pale-theme">
          <h2>Portfolio des projets</h2>

          <section class="project">
            <h3 class="title">Club de roller derby : les Croisty Bats</h3>
            <a class="link" href="https://sprightly-madeleine-71aee9.netlify.app/" target="_blank">
              <img class="image" src="../../images/illustrations/illustration-croisty-bats.webp" alt="Illustation du site du club de roller derby : les Croisty Bats">
            </a>
            <p class="description">
              Site d'une association sportive fictive.<br> 
              Il présente le club, puis montre les actualités, les entrainements et les évènements de l'association.
            </p>
            <ul class="skills">
              <li class="front-skill">HTML</li>
              <li class="front-skill">CSS</li>
              <li class="front-skill">Bootstrap</li>
              <li class="tool-skill">Git</li>
              <li class="tool-skill">GitHub</li>
              <li class="office-skill">Inkscape</li>
            </ul>     
          </section>

          <section class="project">
            <h3 class="title">Jeu de dés sur navigateur web</h3>          
            <a class="link" href="https://quiet-pixie-aa5271.netlify.app/" target="_blank">
              <img class="image" src="../../images/illustrations/illustration-des.webp" alt="Illustation du site de jeu de dés">
            </a>
            <p class="description">
              Ce site est un jeu de dés pour 2 joueurs où il faut atteindre 100 points avant l'adversaire. 
            </p>
            <ul class="skills">
              <li class="front-skill">HTML</li>
              <li class="front-skill">CSS</li>
              <li class="front-skill">Bootstrap</li>
              <li class="front-skill">JavaScript</li>
              <li class="tool-skill">Git</li>
              <li class="tool-skill">GitHub</li>
              <li class="office-skill">Inkscape</li>
            </ul>
          </section>

          <section class="project">
            <h3 class="title">Site web de Sandrine Coupart : diététicienne-nutritionniste</h3>          
            <a class="link" href="https://ecf-nutritionniste-symfony-1bf4cc814a3e.herokuapp.com/" target="_blank">
              <img class="image" src="../../images/illustrations/illustration-nutritionniste.webp" alt="Illustation du site de Sandrine Coupart : 
              diététicienne-nutritionniste">
            </a>
            <p class="description">
              Site de recettes proposées par une diététicienne-nutritionniste fictive.
            </p>
            <ul class="skills">
              <li class="front-skill">CSS</li>
              <li class="back-skill">Heroku</li>
              <li class="back-skill">Symfony</li>
              <li class="tool-skill">Git</li>
              <li class="tool-skill">GitHub</li>
              <li class="tool-skill">Trello</li>
              <li class="office-skill">Figma</li>
              <li class="office-skill">Inkscape</li>
            </ul>
          </section>

          <section class="project">
            <h3 class="title">Site web du garage de Vincent Parrot</h3>          
            <a class="link" href="https://v-parrot-garage-e709d2d1efba.herokuapp.com/" target="_blank">
              <img class="image" src="../../images/illustrations/illustration-garage.webp" alt="Illustation du site garage de Vincent Parrot">
            </a>
            <p class="description">
              Site présentant les services proposés par un garage fictif : 
              réparation mécanique, réparation carrosserie, entretien, vente de véhicules d'occasion.
            </p>
            <ul class="skills">
              <li class="front-skill">CSS</li>
              <li class="back-skill">Heroku</li>
              <li class="back-skill">Symfony</li>
              <li class="tool-skill">Git</li>
              <li class="tool-skill">GitHub</li>
              <li class="tool-skill">Trello</li>
              <li class="office-skill">Figma</li>
              <li class="office-skill">Inkscape</li>
            </ul>
          </section>
        </article>
      </main>

      <!--Footer-->
      <?php 
        include './footer.php'
      ?>
     
  </body>
</html>