<?php


include('template/header.php');
if(empty($_GET['id'])){
	echo "Erreur, houston";
}
else{
	$id=$_GET['id'];

if( filter_has_var( INPUT_POST, 'modif' ) )
{
	$txt_fr=$_POST['francais'];
	$txt_en=$_POST['Anglais'];

	
    $txtfr = $bdd->prepare("UPDATE page SET contenu = :text_fr WHERE id = :id");
 
	$txtfr->execute(array(
    				'text_fr' => $txt_fr,
    				'id' => $id
    			));

    $txten = $bdd->prepare("UPDATE page SET contenu = :text_en WHERE id_parent = :id");
      	 
				$txten->execute(array(
    				'text_en' => $txt_en,
    				'id' => $id
    			));
    			echo '<strong>Les textes ont bien été modifiés</strong>' ;

}
echo '<a href="accueil.php?id='.$id.'" class="btn btn-primary">Retour en arrière</a>';
$texte=$bdd->query("SELECT * FROM page INNER JOIN lang ON lang.id=lang_id WHERE page.id=$id OR id_parent=$id");
$modiftexte = $texte->fetchAll(PDO::FETCH_OBJ);
echo '<form method="post" action="'.$_SERVER['REQUEST_URI'].'">';

foreach ($modiftexte as $k) {
	
	echo '<h1>'.$k->libelle.'</h1>';
	
	
   echo '<textarea class="textarea" name="'.$k->libelle.'" cols="40" rows="20" style="width: 40em; height: 20em" >'.$k->contenu.'</textarea>';
	

}
echo '<input type="submit" class="btn btn-large btn-primary" name="modif" id="modif">';
echo '</form>';

}


include('template/footer.php')
?>