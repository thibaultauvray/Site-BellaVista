<?php

require_once('connexion_bdd.php');

session_start(); 
?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="assets/css/form.css">
      <link rel="stylesheet" href="assets/css/admin.css">
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <?php     
     
 		$errors = '';
       		if( filter_has_var( INPUT_POST, 'send' ) )
      	 {
            
            
            $pass_hache = sha1($_POST['mdp']);
            $req = $bdd->prepare('SELECT id FROM admin WHERE user = ? AND mdp = ?');            
			$req->execute(array($_POST['user'], $pass_hache));
            $resultat=($req->fetch());
			if (!$resultat)
			{
 		 	  $errors = 'Mauvais identifiant ou mot de passe !';
			}
			else
			{
 			 $_SESSION['login'] = $_POST['user']; 

			}

           
      }
       ?>
    </head>
 
    <body>

      <?php
      if(empty($_SESSION)){
        if(!empty($_GET['deconnecte'])){
            $errors = "Vous avez été deconnecté";
           
        }
        if(!empty($_GET['erreur'])){
           $errors = "Vous avez rien a faire ici !";
           
        }
      ?>
      
        <img src="img/logo.png" alt="">
           <form class="form-signin" method="post" action="<?php echo( $_SERVER['REQUEST_URI'] ); ?>" >
        <h2 class="form-signin-heading">Connectez vous</h2>
        <input class="input-block-level" placeholder="Nom d'utilisateur" type="text" id="user" name="user">
        <input class="input-block-level" placeholder="Password" type="password" id="mdp" name="mdp">
        <p class="text-error"><?php echo $errors; ?></p>
        <button class="btn btn-large btn-primary" type="submit" id="send" name="send">Sign in</button>
      </form>

      
        
        <?php
      }
        else{

         header('Location: accueil.php');

        }
        ?>
    </body>
</html>

</div>