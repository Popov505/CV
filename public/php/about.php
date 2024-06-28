<!DOCTYPE html>
<html lang="fr">
    <head>
      <!--Meta-->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--Title-->
      <title>CV de Ivan Delville : Développeur full stack junior - A propos</title>
      <!-- Fonts Rajdhani and Barlow -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">
      <!--Styles : CSS-->
      <link rel="stylesheet" href="/public/styles/common.css" type="text/css">
      <link rel="stylesheet" href="/public/styles/about.css" type="text/css">
    </head>

    <body>
      <!--Header-->
      <?php 
        include './header.php'
      ?>

      <main>
        <article class="personnal dark-theme">
          <h2 class="personnal-title">A propos</h2>
          
          <section class="informations">
            <h3>Informations personnelles</h3>
            <p>Né le 21/12/1985 (38 ans)</p>
            <p>Marié</p>
            <p>Permis A et B</p>
          </section>

          <section class="contact">
            <h3>Contacts</h3>
            <p>Téléphone : 06 76 76 32 52</p>
            <p>Email : ivandelville@gmail.com</p>
            <div>
              <a href="https://www.linkedin.com/in/ivan-delville-5b5177122/" target="_blank">
                <img class="logo-social link" src="/public/images/logos/logo-linkedin.webp" alt="Accès à mon profil Linkedin - Logo de Linkedin">
              </a>
              <a href="https://github.com/Popov505" target="_blank">
                <img class="logo-social link" src="/public/images/logos/logo-github.webp" alt="Accès à mon profil Github - Logo de Github">
              </a>
            </div>
          </section>

          <section class="various">
            <h3>Centres d'intérêts</h3>
            <p>Sports : surf, natation, vélo, boxe</p>
            <p>Musique : Guitare, Country, Variété française</p>
            <p>Bricolage</p>
          </section>
        </article>

        <article class="skills pale-theme">
          <h2 class="skills-title">Mes compétences</h2>
          
          <section class="front-skill-set">
            <h3>Front end</h3>
            <ul>
              <li class="front-skill">HTML</li>
              <li class="front-skill">CSS</li>
              <li class="front-skill">JavaScript</li>
              <li class="front-skill">Bootstrap</li>
            </ul>
          </section>

          <section class="back-skill-set">
            <h3>Back end</h3>
            <ul>
              <li class="back-skill">PHP</li>
              <li class="back-skill">Symfony</li>
            </ul>
          </section>

          <section class="bdd-skill-set">
            <h3>Déploiement et BDD</h3>
            <ul>
              <li class="bdd-skill">Heroku</li>
              <li class="bdd-skill">XAMPP</li>
              <li class="bdd-skill">PhpMyAdmin</li>
              <li class="bdd-skill">SQL</li>
            </ul>
          </section>

          <section class="soft-skill-set">
            <h3>Savoirs être</h3>
            <ul>
              <li class="soft-skill">Rigueur</li>
              <li class="soft-skill">Esprit d'équipe</li>
              <li class="soft-skill">Polyvalence</li>
              <li class="soft-skill">Adaptabilité</li>
            </ul>
          </section>

          <section class="tool-skill-set">
            <h3>Outils</h3>
            <ul>
              <li class="tool-skill">Git</li>
              <li class="tool-skill">GitHub</li>
              <li class="tool-skill">Trello</li>
            </ul>
          </section>

          <section class="office-skill-set">
            <h3>Langue et bureautique</h3>
            <ul>
              <li class="office-skill">Anglais</li>
              <li class="office-skill">Figma</li>
              <li class="office-skill">Suite office</li>
              <li class="office-skill">Inkscape</li>
            </ul>
          </section>
        </article>
        
        <article class="studies dark-theme">
          <h2 class="studies-title">Formation</h2>
          <section class="studi">
            <h3>2024 : Developpeur Web Full Stack</h3>
            <p>Ecole en ligne Studi</p>
          </section>

          <section class="um2">
            <h3>2010 : Ingénieur EEA</h3>
            <p>Master Electronique, Electrotechnique et Automatique</p>
            <p>Spécialité Capteurs et systèmes associés</p>
            <p>Universités des Sciences de Montpellier (34)</p>
          </section>

          <section class="iut">
            <h3>2005 : Technicien en électronique</h3>
            <p>DUT Génie électrique et informatique industrielle</p>
            <p>Option électronique</p>
            <p>IUT Montpellier (34)</p>
          </section>
        </article>
        
        <article class="experiences pale-theme">
          <h2>Expériences</h2>

          <section>
            <h3>Ingénieur</h3>

            <div class="experience">
              <h4>Mai 2021 – Oct. 2021 : Ingénieur industrialisation (Orolia, 56)</h4>
              <p>
                Planifier l’industrialisation d’un produit de la conception jusqu’au SAV
                Gérer les sous traitants
                Réaliser les dossiers de fabrication.
              </p>
            </div>

            <div class="experience">
              <h4>Avril 2018 – Déc. 2018 : Ingénieur système (Altersis - Schneider Electric,
                34)</h4>
              <p>
                Configurer et valider sur plateforme des systèmes de contrôle commande numérique
                (PCCN) dédiés aux postes sources.
              </p>
            </div>

            <div class="experience">
              <h4>Juin 2017 - Nov. 2017 : Responsable plateau (Altersis - General Electric,
                34)</h4>
              <p>
                Concevoir un cahier de livrables pour les 20 sous-traitants travaillant dans les différents
                services
                Être l’intermédiaire technique entre les prescripteurs et les collaborateurs.
              </p>
            </div>

            <div class="experience">
              <h4>Sept. 2014 - Mai 2017 : Ingénieur industrialisation (Altersis -
                Alstom/General Electric, 34)</h4>
              <p>
                Réaliser les dossiers de fabrication de cartes électroniques
                Concevoir les boîtiers et pièces mécaniques ainsi que les plans de fabrication sous
                Solidworks
                Rédiger des documents pour le banc de test fabricant
                Gérer les designers en sous-traitance et les fabricants
              </p>
            </div>

            <div class="experience">
              <h4>Fév. 2011 - Juin 2014 : Ingénieur électronique (Altersis - Schneider
                Electric, 34)</h4>
              <p>
                Concevoir des cartes électroniques (analogique et numérique)
                Réaliser des prototypes et les déverminer
                Réaliser des tests environnementaux et CEM.
              </p>
            </div>

            <div class="experience">
              <h4>Mars 2010 - Juillet 2010 : Ingénieur électronique stagiaire (Thales, 26)</h4>
              <p>
                Étudier la faisabilité d’un système LIDAR adapté au marché éolien
              </p>
            </div>

            <div class="experience">
              <h4>Avril 2009 - Juin 2009 : Technicien électronique stagiaire (Irysolar, 34)</h4>
            </div>

          </section>

          <section>
            <h3>Expériences diverses</h3>

            <div class="experience">
              <h4>Nov. 2020 – Avril 2023 : Projet personnel (Le Croisty, 56)</h4>
              <p>
                Rénover une maison : électricité, chauffage, isolation des combles, plomberie, peintures,...
              </p>
              <p>
                Aider au maraîchage : clôturer le terrain, entretenir le tracteur, ...
              </p>
            </div>

            <div class="experience">
              <h4>Sept. 2022 – Nov. 2022 : Professeur de technologie (Rostrenen, 22)</h4>
              <p>
                Préparer et animer les cours.
              </p>
            </div>

            <div class="experience">
              <h4>Nov. 2021 – Juillet 2022 : Encadrant TD et TP pour les BTS
                Electrotechnique et Maintenance (UIMM, 56)</h4>
            </div>

            <div class="experience">
              <h4>Jan. 2021 – Juin 2021 : Veilleur de nuit (ESAT, 56)</h4>
            </div>

            <div class="experience">
              <h4>Avril 2019 - Oct. 2020 : Professeur particulier pour collégiens et lycéens</h4>
            </div>
            
          </section>
        </article>

      </main>

      <!--Footer-->
      <?php 
      include './footer.php'
      ?>
     
  </body>
</html>