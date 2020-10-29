<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="news.css">
      <title>Numériqu'elles</title>
  </head>
  <body>

    <?php
      require_once('header.html');
    ?>
    <div class="first_image">
    </div>
    <section class="mainContent">
        <div class="titleDecoration">
          <div class="title">
            <div class="bar"></div>
            <div>
              <h2>Actualités</h2>
            </div>
          </div>
        </div>
        <div class="news">
            <div class="newsContent">
                <p>Pour la première fois depuis sa création Numériqu'elles se vivra pour les participante par vidéoconférence.</p>
                <div class="newsImage">
                    <img src="images/Capture_affiche2020.png" alt="Affiche 2020">
                </div>
            </div>
            <div class="newsContent">
                <p>Bilan de l'édition 2019 sur les territoires de Lille, Amiens, Boulogne et Lens</p>
                <div class="newsImage">
                    <a href="ressources/Numériquelles_bilan2019.pdf" title="Bilan 2019"><img src="images/capture_bilan.png" alt="Bilan 2019"></a>
                </div>
            </div>
            <div class="newsContent">
                <p>Afin de profiter au mieu de l'événement pensez à consulter notre dossier sur les bons usage pour la videoconférence.</p>
                <div class="newsImage">
                    <a href="ressources/visioconference-les-bons-usages-pour-bien-communiquer.pdf" title="les bons usages de la visioconference"><img src="images/visio.jpg" alt="les bons usages de la visioconference"></a>
                </div>
            </div>
        </div>
    </section>
    <?php
      require_once('footer.html');
    ?>

  </body>
</html>