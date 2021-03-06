<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['id']) AND isset($_SESSION['mail']) AND isset($_SESSION['pseudo'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	echo '<html>';
	echo '<head>';
	echo '<title>Page de notre section membre</title>';
	echo '</head>';

	echo '<body>';
	echo 'Votre login est '.$_SESSION['mail'].' et votre mot de passe est '.$_SESSION['pseudo'].'.';
	echo '<br />';

	// On affiche un lien pour fermer notre session
	echo '<a href="./deconnexion.php">Déconnection</a>';
}
else {
	echo 'Les variables ne sont pas déclarées.';
}
?>

<!DOCTYPE html>
<html lang="fr" >
<head>
    <title> Cinéref </title>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="stylesheet.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Krona+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Ceci est la ligne d'origine -->
<link rel="stylesheet" type="text/css" href="css/styles.css">
<!-- Ceci est la ligne modifiée -->
<link rel="stylesheet" type="text/css" href="css/styles_light.css" id="theme-link">





    </head>
<body>
    <header class="container-fluid">

    <div class="row align-items-center">
      <div class="col">
        <form id="Rechercher" class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Films/Séries..." aria-label="Search">
          <button id="recherche" class="fa fa-search btn btn-outline-success my-sm-0"  type="submit"> </button>




        </form>
      </div>
      <div class="col text-center">
        <h1 class="titre-page">Cinéref</h1>
      </div>
      <div class="col d-flex justify-content-end align-items-center">
        <a href="inscription.php" class="btn btn-secondary" id="inscription" role="button" >Se connecter</a>
      </div>
    </div>




<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
	   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >


        <span class="navbar-toggler-icon"></span>
     </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

<ul class="navbar-nav">

<li class="nav-item">
  <a href="index.php" class="btn btn-secondary" role="button" > Accueil</a>
</li>
<li class="nav-item">
  <button type="button" class="btn btn-secondary">Quiz</button>
</li>

<li class="nav-item dropdown">
		<div class="btn-group" role="group">
			<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Films
			</button>
			<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="seigneurdesanneaux.php">Aventure</a>
				<a class="dropdown-item" href="#">Comédie</a>
			</div>
    </div>
</li>

<li class="nav-item dropdown">
		<div class="btn-group" role="group">
			<button id="btnGroupDrop2" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Séries
			</button>
			<div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
				<a class="dropdown-item" href="#">Horreur</a>
				<a class="dropdown-item" href="#">Dramatique</a>
				<a class="dropdown-item" href="#">Drôle</a>
			</div>
		</div>
  </li>

<li class="nav-item dropdown">
		<div class="btn-group" role="group">
		<button id="btnGroupDrop3" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Youtube
			</button>
			<div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
				<a class="dropdown-item" href="#">Court métrage</a>
				<a class="dropdown-item" href="#">Séries</a>
			</div>
		</div>
  </li>
  </ul>
</div>
</div>

</div>
</nav>


</header>

<main id="content-layout" class="content-layout homepage-layout cf">

     <div class="container site">
    <h2 id="week"> Les actualités de la semaine : </h2>
     <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/harry.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="actu">Actualité 1</h5>
        <p>Test.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/venom.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="actu">Atualité 2</h5>
        <p>Exemple de texte.</p>
      </div>
    </div>
    <div class="carousel-item">
        <a href="https://www.google.fr/" ><img src="image/hobbit.jpg" class="d-block w-100" alt="..."></a>
      <div class="carousel-caption d-none d-md-block">
        <h5 class="actu">Actualité 3</h5>
        <p>blababla.</p>
      </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
         </div>



    </div>
  </main>


<footer>
<span id="theme">Thème sombre</span>   
</footer>

	
<script src=js/script.js></script>
	
	
	</body>
</html>
