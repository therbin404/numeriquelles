<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="styleevent.css">
      <title>Numériqu'elles</title>
  </head>
  <body>

    <?php
      require_once('header.html');
    ?>
    <section class="mainContent">
      <section class="observation">
        <div class="titleDecoration observationHeader">
          <div class="title">
            <div class="bar"></div>
            <div>
              <h2>CONSTAT</h2>
            </div>
          </div>
        </div>
        <p>Dans les Hauts-de-France, 3000 emplois numériques sont non
          pourvus chaque année et les femmes représentent seulement
          33% des emplois du secteur et 18% des métiers informatiques.
          Ces métiers restent mal connus et stéréotypés : maths, urbain,
          geek... masculins.</p>
      </section>
      <section class="numbers">
        <div>
          <div class="number firstColor">
            <p>20</p>
            <p>Entreprises</p>
          </div>
          <div class="number secondColor">
            <p>10</p>
            <p>Organismes de formation</p>
          </div>
        </div>
        <div>
          <div class="number firstColor">
            <p>2173</p>
            <p>Filles déjà sensibilisées depuis 2015</p>
          </div>
          <div class="number secondColor">
            <p>984</p>
            <p>Filles inscrites en 2020</p>
          </div>
        </div>
      </section>
      <section class="objectives">
        <div class="titleDecoration objectivesHeader">
          <div class="title">
            <div class="bar"></div>
            <div>
              <h2>OBJECTIFS</h2>
            </div>
          </div>
        </div>
        <p>Pour répondre à cet enjeu le Corif organise Numériqu’elles depuis 2015 sous la forme d’ateliers dédiés aux collegiennes et lycéennes, pour faire découvrir les formations et métiers du numérique.</p>
      </section>
      <section class="partners">
        <div class="titleDecoration roadMap">
          <div class="title">
            <div class="bar"></div>
            <div>
              <h2>Nos partenaires</h2>
            </div>
          </div>
        </div>
        <img src="images/partners.svg" alt="Partenaires">
      </section>
    </section>
    <?php
      require_once('footer.html');
    ?>

  </body>
</html>