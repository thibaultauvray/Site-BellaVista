<?php
include('template/header.php');
include('function/imagethumb.php');
$errors=null;


switch ($_GET['mode']) {
    case "supprimer":
    if( filter_has_var( INPUT_POST, 'vali' ) )
      	 {
      	 	$veriff=$_POST['validation'];
      	 	if($veriff=="oui"){
      	 		$idimage = $_POST['id'];
      	 		$delete="DELETE FROM photo WHERE idphoto=$idimage";
      	 		$count = $bdd->exec($delete);
      	 		$message="L'image a bien été supprimé <br/>";
      	 		echo $message;
               echo '<a href="photo.php?id='.$idimage.'" class="btn btn-primary">Retour</a>';


      	 	}
      	 	else{
      	 		  $idphoto=$_GET['idimage'];

				echo "<a href='#x' onClick='javascript:history.go(-2)'>Retour</a>" ;	 
					}
      	 }
      	 else{
    	$idphoto=$_GET['idimage'];
    	$sqlaffiche="SELECT * FROM photo WHERE idphoto=$idphoto";
    	$queryaffiche=$bdd->query($sqlaffiche);
    	$affiche=$queryaffiche->fetch(PDO::FETCH_OBJ);

    	echo '<img style="width: 500px;" src="../'.$affiche->chemin.'" /><br>';
		echo 'Voulez vous vraiment supprimer cette image ?';
		echo '<form method="POST" action="">';
		echo '<label for="oui" style="display: inline; margin-right: 11px; margin-top: 20px;">Oui</label><input style="margin-right: 21px; margin-top: 0px;" type="radio" name="validation" value="oui" id="oui" /> ';
		echo '<label for="non" style="display: inline; margin-right: 11px; margin-top: 20px;">Non</label><input style="margin: 0px;" type="radio" name="validation" value="non" id="non" /> <br />';
	 	echo '<input type="hidden" name="id" value="'.$idphoto.'" />';
		echo '<button type="submit" id="vali" name="vali" class="btn btn-default">Valider</button>';
		echo '</form>';
		}
		break;
	case "ajout" :
	$id=$_GET['id'];
		if( filter_has_var( INPUT_POST, 'submit' ) )
		{
   if ($_FILES['mon_fichier']['error'] > 0) 
   	{
   		$errors .= "Erreur lors du transfert";
   	}
   	/*
   	VERIFICATION TAILLE
   	$image_sizes = getimagesize($_FILES['icone']['tmp_name']);
if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight) $erreur = "Image trop grande";
*/
   	$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
	$extension_upload = strtolower(  substr(  strrchr($_FILES['mon_fichier']['name'], '.')  ,1)  );

	if ( in_array($extension_upload,$extensions_valides) ) {
		echo "Extension correcte <br/>";
	}
	else{
		$errors .="Mauvaise extension";
	}
	 $filename = time() .'.'. $extension_upload;
    $image_path = '../img/' .$filename;
    $thumb_path = '../img/thumb_'. $filename;
    $chemin = 'img/' .$filename;
    $cheminthumb = 'img/thumb_' .$filename;

	$resultat = move_uploaded_file($_FILES['mon_fichier']['tmp_name'], $image_path);

	if ($resultat){

	 
     
    
    imagethumb($image_path, $thumb_path, 500);
    $sqlajout="INSERT INTO photo (chemin, thumb, page_id )VALUES ('$chemin','$cheminthumb','$id')";
  
    $count = $bdd->exec($sqlajout);
 	$iLastInsertId = $bdd->lastInsertId();
 	
 	$description = $_POST['description'];
 	$alternative=$_POST['alternative'];
 	$descriptionen=$_POST['descriptionen'];
 	$alternativeen=$_POST['alternativeen'];

 	$sqlajoutfr="INSERT INTO description(description, alt, lang_id, id_photo) VALUES ('$description', '$alternative', 1, $iLastInsertId)";
 		$counte = $bdd->exec($sqlajoutfr);

 	$sqlajouten="INSERT INTO description(description, alt, lang_id, id_photo) VALUES ('$descriptionen', '$alternativeen', 2, $iLastInsertId)";
 		$counter = $bdd->exec($sqlajouten);


	 echo "Transfert réussi <br/>";
   echo '<a href="photo.php?id='.$id.'" class="btn btn-primary">Retour</a>';
	
	 }
   else{
    echo "erreur oi";
   }
}
else{
echo $errors;

?>

<form method="post" action="" enctype="multipart/form-data" >

     <label for="mon_fichier">Fichier :</label><br />
     <input type="hidden" name="MAX_FILE_SIZE" value="99999999999" />
     <input type="file" name="mon_fichier" id="mon_fichier" /><br />
     <h1>Francais</h1>
	 <label for="description" style="display: inline-block;margin-right: 15px;" class="col-sm-2 control-label">Description de l'image</label><input type="text" class="form-control" name="description" id="description" placeholder="Description de l'image"><br />
    <label for="alternative" style="display: inline-block;margin-right: 15px;" class="col-sm-2 control-label">Alternative de l'image</label><input type="text" class="form-control" name="alternative" id="alternative" placeholder="Alternative de l'image"><br/ >
   	<h1>Anglais</h1>
   	<label for="descriptionen" style="display: inline-block;margin-right: 15px;" class="col-sm-2 control-label">Description de l'image</label><input type="text" class="form-control" name="descriptionen" id="descriptionen" placeholder="Description de l'image"><br />
    <label for="alternativeen" style="display: inline-block;margin-right: 15px;" class="col-sm-2 control-label">Alternative de l'image</label><input type="text" class="form-control" name="alternativeen" id="alternativeen" placeholder="Alternative de l'image"><br/ >

    </div>
  	</div>


     <input type="submit" name="submit" value="Envoyer" />
</form>
<?php

}
break;
	case "modifier" :
	$idimage=$_GET['idimage'];
  $id=$_GET['id'];
	

    if( filter_has_var( INPUT_POST, 'envoie' ) )
    {
   if ($_FILES['mon_fichier']['error'] > 0) 
    {
      $errors .= "Erreur lors du transfert";
    }
    /*
    VERIFICATION TAILLE
    $image_sizes = getimagesize($_FILES['icone']['tmp_name']);
if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight) $erreur = "Image trop grande";
*/
    $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
  $extension_upload = strtolower(  substr(  strrchr($_FILES['mon_fichier']['name'], '.')  ,1)  );
  
  if ( in_array($extension_upload,$extensions_valides) ) {
    echo "Extension correcte";
  }
  else{
    $errors .="Mauvaise extension";
  }
   $filename = time() .'.'. $extension_upload;
    $image_path = '../img/' .$filename;
    $thumb_path = '../img/thumb_'. $filename;
    $chemin = 'img/' .$filename;
    $cheminthumb = 'img/thumb_' .$filename;

  $resultat = move_uploaded_file($_FILES['mon_fichier']['tmp_name'], $image_path);;
  if ($resultat){

   
     
    
    imagethumb($image_path, $thumb_path, 500);
    $sqlmodif="UPDATE photo SET chemin='$chemin', thumb='$cheminthumb', page_id=$id WHERE idphoto=$idimage";
   $count = $bdd->exec($sqlmodif);
  $iLastInsertId = $bdd->lastInsertId();

  $description = $_POST['description'];
  $alternative=$_POST['alternative'];
  $descriptionen=$_POST['descriptionen'];
  $alternativeen=$_POST['alternativeen'];

  $sqlmodiffr="UPDATE description SET description='$description' alternative='alternative',1, page_id=$id";
  $counte = $bdd->exec($sqlmodiffr);

  $sqlmodifen="UPDATE description SET description='$descriptionen' alternative='alternativeen',2, page_id=$id";
  $counter = $bdd->exec($sqlajouten);


   echo " réussi";
 }
}
 else{

	$affichephoto = "SELECT * FROM photo WHERE idphoto=$idimage";
	$photo = $bdd->query($affichephoto);
	$donnes = $photo->fetch(PDO::FETCH_OBJ);
	echo '<img src="../'.$donnes->chemin.'" style="width: 500px;" />';
  $affichedesfr="SELECT * FROM description WHERE id_photo=$idimage AND lang_id=1";
 
  $affichequeryfr=$bdd->query($affichedesfr);
  $tabfr=$affichequeryfr->fetch(PDO::FETCH_OBJ);

  $affichedesen="SELECT * FROM description WHERE id_photo=$idimage AND lang_id=2";
  
  $affichequeryen=$bdd->query($affichedesen);
  $taben=$affichequeryen->fetch(PDO::FETCH_OBJ);


	?>
	<form method="post" action="" enctype="multipart/form-data" >

     <label for="mon_fichier">Fichier :</label><br />
     <input type="hidden" name="MAX_FILE_SIZE" value="99999999999" />
     <input type="file" name="mon_fichier" id="mon_fichier" /><br />
     <h1>Francais</h1>
	 <label for="description" style="display: inline-block;margin-right: 15px;" class="col-sm-2 control-label">Description de l'image</label><input type="text" class="form-control" name="description" id="description" value=<?php echo "'$tabfr->description'"; ?>><br />
    <label for="alternative" style="display: inline-block;margin-right: 15px;" class="col-sm-2 control-label">Alternative de l'image</label><input type="text" class="form-control" name="alternative" id="alternative" value=<?php echo "'$tabfr->alt'"; ?>><br/ >
   	<h1>Anglais</h1>
   	<label for="descriptionen" style="display: inline-block;margin-right: 15px;" class="col-sm-2 control-label">Description de l'image</label><input type="text" class="form-control" name="descriptionen" id="descriptionen" value=<?php echo "'$taben->description'"; ?>><br />
    <label for="alternativeen" style="display: inline-block;margin-right: 15px;" class="col-sm-2 control-label">Alternative de l'image</label><input type="text" class="form-control" name="alternativeen" id="alternativeen" value=<?php echo "'$taben->alt'"; ?>><br/ >

    </div>
  	</div>


     <input type="submit" name="envoie" value="Envoyer" />
</form>
<?php
}
}
?>