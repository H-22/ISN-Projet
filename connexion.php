	<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', 'root');

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: index.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mail et/ou mot de passe incorrect";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<html>


   <head>
		 <title> Cinéref </title>
		<meta charset="utf-8" >
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link href="profil.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Krona+One&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>


   <body>
      <div class="container form">
         <h2>Connexion</h2>
         <br /><br />
         <form method="POST" action="">
            <input class="input" type="email" name="mailconnect" placeholder="Mail" />
            <input class="input" type="password" name="mdpconnect" placeholder="Mot de passe" />

            <input class="validate" type="submit" name="formconnexion" value="Se connecter !" />
         </form>
				   <a href="inscription.php">S'inscrire </a>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>
</html>
