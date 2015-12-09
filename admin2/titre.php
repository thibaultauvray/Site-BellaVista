<?php

/*VERIF SUPPRESSION*/
$message="";

include('template/header.php');
    if( filter_has_var( INPUT_POST, 'submit' ) )
    {
    	$titre = $_POST['titre'];
    	$sql = "UPDATE page SET title='$titre' WHERE titre='accueil'";
    	$sqlquery = $bdd->query($sql);
    	$tabquery=$sqlquery->fetch(PDO::FETCH_OBJ);
    	echo "Le titre a bien été modifié";

    }
    else{
$affiche = "SELECT title FROM page WHERE titre='accueil'";
$afficheqeury = $bdd->query($affiche);
echo $affiche;
$tabaff = $afficheqeury->fetch(PDO::FETCH_OBJ);
?>
<form action="" method="POST">
	<label for="titre">Titre</label>
	<?php 
	echo '<input name="titre" type="text" id="titre" value="'.$tabaff->title.'" />';
	?>
	<input type="submit" name="submit">
</form>
<?php
}
?>