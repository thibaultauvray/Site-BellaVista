<?php

/*VERIF SUPPRESSION*/
$message="";

include('template/header.php');

/*TEST VARIABLE IDPHOTO*/
if(isset($_GET['id_photo'])){
	$id_photo=$_GET['id_photo'];
}
else{
	$id_photo=null;
}
if( filter_has_var( INPUT_POST, 'vali' ) )
      	 {
      	 	$veriff=$_POST['validation'];
      	 	if($veriff=="oui"){
      	 		$delete="DELETE FROM photo WHERE id='$idimage'";
      	 		$count = $bdd->exec($delete);
      	 		$message="Suppression ok";
      	 		echo $message;

      	 	}
      	 }
 else{
if(empty($_GET['id']))
{
	/*
	$idimage=$_GET['idimage'];

	if(isset($_GET['delete'])){


		echo '<img src="../'.$retouches->chemin.'" alt="">';
		echo 'Voulez vous vraiment supprimer cette image ?';
		echo '<form method="POST" action="">';
		echo '<input type="radio" name="validation" value="oui" id="oui" /> <label for="oui">Oui</label>';
		echo '<input type="radio" name="validation" value="non" id="non" /> <label for="non">Non</label><br />';
		echo '<button type="submit" id="vali" name="vali" class="btn btn-default">Valider</button>';
		echo '</form>';*/
	Echo "erreur";
	}


elseif(!empty($_GET['id']))
{

	$id=$_GET['id'];
	$verifthumb = "SELECT * FROM page WHERE id=$id";
	$verif=$bdd->query($verifthumb);
	$tabverif=$verif->fetch(PDO::FETCH_OBJ);

		$sqlaffiche = "SELECT *
						FROM `photo`
						WHERE page_id =$id
						";
		
		$affiche=$bdd->query($sqlaffiche);
		$tabaffiche=$affiche->fetchAll(PDO::FETCH_OBJ);
			echo '<a href="editphoto.php?id='.$id.'&mode=ajout" style="margin-bottom:10px;"class="btn btn-large btn-primary">Ajouter</a><br>';

		foreach ($tabaffiche as $l) 
	{
		echo '<img src="../'.$l->chemin.'" alt="" class="img-thumbnail" style="width:300px; margin-bottom:10px;">';
		echo '<a href="editphoto.php?idimage='.$l->idphoto.'&mode=supprimer" class="btn btn-large btn-primary">Supprimer</a>';
		echo '<a href="editphoto.php?idimage='.$l->idphoto.'&id='.$id.'&mode=modifier" class="btn btn-large btn-primary">Modifier</a>';
		echo '<br>';
	}

	

	echo '</div>';
}
}

include('template/footer.php')

?>