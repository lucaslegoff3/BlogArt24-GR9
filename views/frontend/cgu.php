<?php
require_once '../../config.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LSART</title>
  <link href="../../src/css/style.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo ROOT_URL; ?>/src/images/Logo_LSART_Google.webp" />
</head>


<body>
<nav id="navbar" class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <img src="../../src/images/LS_logo_noir.webp" alt="Logo LSART" id="logo_header" class="logo_header">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Accueil</a>
        </li>
        <li>
        <a class="nav-link active" href="./evenements.php">Evenements</a>
        </li>
        <li>
        <a class="nav-link active" href="/">Blog</a>
        </li>
        <li>
        <a class="nav-link active" href="./equipe.php">À propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/views/backend/dashboard.php">Admin</a>
        </li>
      </ul>
    </div>
    <!--right align-->
    <div class="d-flex">
      <form id="search_bar" class="d-flex" role="search">
        <div class="input-group mb-3 search_bar">
        <span class="input-group-text search_icon">
        <img src="../../src/images/search.png" alt="Pictogramme loupe" id="picto_loupe">
        </span>
        <input class="form-control me-2 search_input" type="search" placeholder="Rechercher" aria-label="Search">
      </div>
      </form>
      <a id="connexion" class="btn btn-primary m-1" href="/views/backend/security/login.php" role="button">Connexion</a>
      <a id="inscription" class="btn btn-primary m-1" href="/views/backend/security/login.php" role="button">Inscription</a>
    </div>
  </div>
</nav>

<section class="cgu">

    <h1>Mentions légales</h1>
    <br>
    Conditions Générales d'Utilisation (CGU) pour LS ART
    <br>

    Date d'entrée en vigueur : 2 février 2024
    <br>
    En utilisant ce blog, vous acceptez pleinement et sans réserve les présentes Conditions Générales d'Utilisation (CGU). Si vous n'êtes pas d'accord avec l'une de ces conditions, veuillez ne pas utiliser ce blog.
    <br>
    <br>
    1. Acceptation des conditions
    <br>
    En accédant et en utilisant ce blog, vous reconnaissez avoir lu, compris et accepté les présentes CGU.
    <br>
    <br>
    2. Description des services
    <br>
    Ce blog, exploité par Lucas Le Goff, propose des articles, des informations, et d'autres contenus liés à l’Accessibilité de la musique au personnes sourde et malentendante. 
    <br>
    <br>
    3. Responsabilités
    <br>
    Le propriétaire du blog s'efforce de fournir des informations exactes et à jour, mais ne garantit pas l'exactitude, l'exhaustivité ou la pertinence de son contenu. L'utilisation des informations et du contenu du blog est à vos propres risques.
    <br>
    <br>
    4. Propriété intellectuelle
    <br>
    Tous les contenus, textes, images, graphiques, logos, vidéos et autres éléments présents sur ce blog sont protégés par les lois sur les droits d'auteur et sont la propriété exclusive de Lucas Le Goff ou de ses concédants de licence. Toute utilisation non autorisée de ces contenus est strictement interdite.
    L'entreprise est située au 1 Rue Jacques Ellul, 33800 Bordeaux.
    <br>
    <br>
    5. Données personnelles
    <br>
    Nous collectons, utilisons et traitons vos données personnelles conformément à notre Politique de Confidentialité. En utilisant ce blog, vous consentez à la collecte et à l'utilisation de vos données personnelles comme décrit dans ladite Politique de Confidentialité.
    <br>
    <br>
    6. Litiges
    <br>
    Tout litige découlant de l'utilisation de ce blog sera régi par les lois en vigueur en France. Tout litige sera soumis à la juridiction exclusive des tribunaux de Bordeaux.
    <br>
    <br>
    7. Modifications des CGU
    <br>
    Nous nous réservons le droit de modifier ces CGU à tout moment. Les modifications seront publiées sur cette page avec la date d'entrée en vigueur mise à jour. Il vous incombe de consulter régulièrement cette page pour rester informé des éventuelles modifications.
    <br>
    Si vous avez des questions ou des préoccupations concernant ces CGU, veuillez nous contacter à l'adresse e-mail suivante : lucas.le-goff@mmibordeaux.com
    <br>
    Il est important de noter que la déclaration du capital social dans les Conditions Générales d'Utilisation (CGU) n'est pas une pratique courante. Les CGU sont généralement axées sur les termes et conditions d'utilisation du service ou du site web, plutôt que sur les aspects financiers de l'entreprise. Cependant, si vous souhaitez intégrer une mention sur le capital social dans vos CGU, voici une suggestion :
    Capital Social
    La présente plateforme est exploitée par LS Art, une entreprise composée de cinq personnes collaborant dans un esprit d'entraide et de coopération. Conscients des défis financiers auxquels peuvent être confrontées les petites entreprises, notre modèle d'exploitation repose sur une contribution collective en lieu et place d'un capital social monétaire traditionnel.
    En l'absence d'un capital social financier formel, chaque membre de l'équipe contribue de manière équitable à la réussite de l'entreprise en fournissant des compétences, des ressources intellectuelles et un engagement collectif envers la mission de l'entreprise.
    Nous croyons en l'importance de favoriser un environnement inclusif et collaboratif, où la valeur de chaque contribution individuelle s'exprime dans le succès collectif de notre entreprise.
    <br>
    Cependant, si vous souhaitez intégrer une mention sur le capital social dans vos CGU, voici une suggestion :
    <br>
    <br>
    Capital Social
    <br>
    <br>
    La présente plateforme est exploitée par LS Art, une entreprise composée de cinq personnes collaborant dans un esprit d'entraide et de coopération. Conscients des défis financiers auxquels peuvent être confrontées les petites entreprises, notre modèle d'exploitation repose sur une contribution collective en lieu et place d'un capital social monétaire traditionnel.
    <br>
    En l'absence d'un capital social financier formel, chaque membre de l'équipe contribue de manière équitable à la réussite de l'entreprise en fournissant des compétences, des ressources intellectuelles et un engagement collectif envers la mission de l'entreprise.
    <br>
    Nous croyons en l'importance de favoriser un environnement inclusif et collaboratif, où la valeur de chaque contribution individuelle s'exprime dans le succès collectif de notre entreprise.

</section>
</body>
<footer>
  <div>
    <img src="../../src/images/LS_logo_blanc.webp">
    <p>LS'Art © 2024</p>
  </div>
  <div>
    <h5>Plan du site</h5>
    <p>Accueil</p>
    <p>Évènements</p>
    <p>Blog</p>
    <p>À propos</p>
    <p>Recherche</p>
    <p>Connexion</p>
  </div>
  <div>
    <h5>Légal</h5>
    <p>Gestion des cookies</p>
    <p>Mention légales</p>
    <p>Gestion de vos données</p>
  </div>
  <div>
    <h5>Nous suivre</h5>
    <p>S'abonner à la Newsletter</p>
    <button>Nous contacter</button>
  </div>

</footer>
</html>