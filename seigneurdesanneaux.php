<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['id']) AND isset($_SESSION['mail']) AND isset($_SESSION['pseudo'] AND isset($_SESSION['mdp'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	echo '<html>';
	echo '<head>';
	echo '<title>Page de notre section membre</title>';
	echo '</head>';

	echo '<body>';
	echo 'Connecté en tant que  '.$_SESSION['pseudo'].' ;
	echo '<br />';

	// On affiche un lien pour fermer notre session
	echo '<a href="./deconnexion.php">Déconnection</a>';
}
else {
	echo ' ';
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
    <link href="article.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Krona+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




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





<main id="test">
<h2> Seigneur des anneaux </h2>
    <div  class= "spotify" >
        <h3> Ambiance du film :</h3>
<iframe src="https://open.spotify.com/embed/playlist/38PvuUgACQT0tZdXZcQJkT" width="300" height="380" allow="encrypted-media"></iframe>
 </div>
    <h4> Un jeune et timide `Hobbit', Frodon Sacquet, hérite d'un anneau magique. Bien loin d'être une simple babiole, il s'agit d'un instrument de pouvoir absolu qui permettrait à Sauron, le `Seigneur des ténèbres', de régner sur la `Terre du Milieu' et de réduire en esclavage ses peuples. Frodon doit parvenir jusqu'à la `Crevasse du Destin' pour détruire l'anneau.
</h4>



    <div class="wrapper">
    <ul>
        <li>
            <h5> Acteur<br/>Principal</h5>
            <p> Elijah Wood</p>
        </li>
         <li>
            <h5> Réalisateur</h5>
             <p> Peter Jackson</p>
        </li>
         <li>
            <h5> Société de <br/> Production</h5>
             <p> New Line Cinéma</p>
         </li>
    </ul>
    </div>

   <iframe class="trailer" width="1243" height="699" src="https://www.youtube.com/embed/nalLU8i4zgs" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"allowfullscreen></iframe>
</main>



    </body>




</html>
