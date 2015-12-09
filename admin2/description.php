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
    	echo "La description a bien été modifié";

    }
    else{
$affiche = "SELECT description FROM page WHERE titre='accueil'";
$afficheqeury = $bdd->query($affiche);
$tabaff = $afficheqeury->fetch(PDO::FETCH_OBJ);
?>
<form action="" method="POST">
	<label for="titre">Description</label>
	<?php 
	echo '<textarea name="titre" type="text" co id="titre" style="width: 533px; height: 143px;"> '.$tabaff->description.'</textarea>';
	?>
	<input type="submit" name="submit">
</form>
<?php
}
?>