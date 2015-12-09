<?php
	include('template/header.php');
	$id=$_GET['id'];
if($_GET['mode']=="modifier")
{
	$id=$_GET['id'];

	if (isset($_POST['modification'])){
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$mail = $_POST['mail'];
		$adresse = $_POST['adresse'];
		$code = $_POST['code'];
		$ville = $_POST['ville'];
		$tel = $_POST['tel'];
		$message = $_POST['message'];
	
$req = $bdd->prepare('UPDATE client SET nom = :nom, prenom = :prenom, mail = :mail, adresse = :adresse, ville = :ville, codepostal =:code, telephone = :tel, message = :message  WHERE idclient = :id');
$req->execute(array(
    'nom' => $nom,
    'prenom' => $prenom,
    'mail' => $mail,
    'adresse' => $adresse,
    'ville' => $ville,
    'code' => $code,
    'tel' => $tel,
    'message' => $message,
    'id' =>$id


    ));
echo 'Client a bien été modifié';
}
	$sql = 'SELECT * FROM client WHERE idclient='.$id.'';
	$client = $bdd->query($sql);
	echo '<form id="contact" class="catalogue" method="post" action="'.$_SERVER['REQUEST_URI'].'">';
	$donnes = $client->fetch();
	echo '<table>';
	echo '<tr>';
	echo '<td><label for="nom">Nom</label></td><td><input type="text" name="nom" value="'.$donnes['nom'].'"></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td><label for="prenom">Prenom</label></td><td><input type="text" name="prenom" value="'.$donnes['prenom'].'"></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td><label for="mail">Mail</label></td><td><input type="text" name="mail" value="'.$donnes['mail'].'"></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td><label for="adresse">Adresse</label></td><td><input type="text" name="adresse" value="'.$donnes['adresse'].'"></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td><label for="code">Code Postal</label></td><td><input type="text" name="code" value="'.$donnes['codepostal'].'"></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td><label for="ville">Ville</label></td><td><input type="text" name="ville" value="'.$donnes['ville'].'"></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td><label for="tel">telephone</label></td><td><input type="text" name="tel" value="'.$donnes['telephone'].'"></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td><label for="message">Message</label></td><td><textarea name="message">'.$donnes['message'].'</textarea>';
	echo '</tr>';

	echo '</table>';
	echo '<input type="submit" name="modification" value="Modifier"/>';
	echo '</form>';


}



else{
		if(isset($_POST['confir']))
	{
		$oui = $_POST['conf'];
		
		if($oui == 'oui'){
			$suppr = $bdd->prepare('DELETE FROM client WHERE idclient = ?');    
			$suppr->execute(array($id));
			echo 'Le client a bien été suprimmé';
			echo '<a href="client.php">Retour sur la page client</a>';
		}
		else{
			header('Location: client.php');
		}


	}
	else{
	
	echo '<form method="POST" class="formulaires" action="'.$_SERVER['REQUEST_URI'].'">';
	echo 'Etes vous sur de vouloir supprimer cette item ?<br>';
	echo  '<INPUT type= "radio" name="conf" value="oui"> Oui
			<INPUT type= "radio" name="conf" value="non"> Non<br>';
	echo '<input type="submit" name="confir" value ="Confirmez">';
	echo '</form>';

}
}




?>