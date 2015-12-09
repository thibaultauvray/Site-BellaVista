<?php


include('template/header.php');
if(empty($_GET['id'])){
	echo "Erreur, houston";
}
else{
	$id=$_GET['id'];

$texte=$bdd->query("SELECT * FROM page WHERE id='$id' OR id_parent='$id'");
$modiftexte = $texte->fecchAll(PDO::FETCH_OBJ);
echo '<form method="post" action="'.$_SERVER['REQUEST_URI'].'">';
foreach ($modiftexte as $k) {
	?>
	
   <textarea name="text_fr" cols="40" rows="20" style="width: 40em; height: 20em" ><?php echo $modiftexte->contenu; ?></textarea>
   <textarea style="float:right" name="text_en" cols="40" rows="20" style="width: 40em; height: 20em"></textarea>
   <input type="submit" class="btn btn-large btn-primary" name="modif" id="modif">
	</form>
<?php
}

}


include('../template/footer.php')
?>