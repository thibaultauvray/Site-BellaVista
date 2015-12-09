<?php


include('template/header.php');
if(isset($_GET['id_menu']))
{
$id_menu=$_GET['id_menu'];

}
else{
	$id_menu =0;
}
if(empty($_GET['id'])){
	$id=1;
}
else{
	$id=$_GET['id'];
}

if(empty($_GET['mode'])){
$affichepage="SELECT titre FROM page WHERE id=$id";
$querypage=$bdd->query($affichepage);
$tabpage=$querypage->fetch(PDO::FETCH_OBJ);
echo "<h1>";
echo $tabpage->titre;
echo "</h1>";
echo "<hr />";
if($id_menu==0){
echo '<a href="texte.php?id='.$id.'" class="btn btn-primary">Modifier texte</a>';
echo '<a href="photo.php?id='.$id.'" class="btn btn-primary">Modifier photo</a>';
}
elseif($id_menu==3){

$affichemenu2="SELECT *, page.id as id_page FROM page INNER JOIN lang ON lang.id=lang_id WHERE (id_menu=2 OR id_menu = 1) AND libelle='francais'";
$queryaffichemenu2=$bdd->query($affichemenu2);
$tabmenu2=$queryaffichemenu2->fetchAll(PDO::FETCH_OBJ);
foreach ($tabmenu2 as $a) {
	if($a->id_menu==2){

		echo '<a href="accueil.php?id='.$a->id_page.'&id_menu=0" class="btn btn-primary" style="">Modifier '.$a->titre.'</a>';
	}
	else{
		echo '<a href="accueil.php?id='.$a->id_page.'&id_menu=1" class="btn btn-primary">Modifier '.$a->titre.'</a>';
	}
}

}
elseif($id_menu==1){
	$affichemenu4="SELECT *, page.id as id_page FROM page INNER JOIN lang ON lang.id=lang_id WHERE id_menu=4 AND libelle='francais'";
$queryaffichemenu4=$bdd->query($affichemenu4);
$tabmenu4=$queryaffichemenu4->fetchAll(PDO::FETCH_OBJ);
echo '<a href="accueil.php?id=4&id_menu=3" class="btn btn-primary">Retour</a>';
foreach ($tabmenu4 as $a) {
	
		echo '<a href="accueil.php?id='.$a->id_page.'&id_menu=0" class="btn btn-primary">Modifier '.$a->titre.'</a>';
	
}
}
elseif($id_menu==7){
echo '<a href="photo.php?id='.$id.'" class="btn btn-primary">Modifier photo</a>';

}
}
else{
	echo '<h1>Outil</h1>';
	echo '<a href="titre.php" class="btn btn-primary">Changer le titre du site</a>';
	echo '<a href="description.php" class="btn btn-primary">Changer la description du site</a>';
	echo '<a href="" class="btn btn-primary">Acceder au statistique de votre site </a>';
}
include('template/footer.php')
?>