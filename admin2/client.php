<?php
include('template/header.php');

$client = $bdd->query('SELECT * FROM client');
	echo '<table class ="clienttab" id="demotable">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>Nom</th>';
	echo '<th>Prenom</th>';
	echo '<th>Mail</th>';
	echo '<th>telephone</th>';
	echo '<th>Adresse</th>';
	echo '<th>Code postal</th>';
	echo '<th>Ville</th>';
	echo '<th>Message</th>';
	echo '<th filter="false">Modifier</th>';
	echo '<th filter="false">Supprimer</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
while($donnes = $client->fetch()){
	echo '<tr>';
	echo '<td>'.$donnes['nom'].'</td>';
	echo '<td>'.$donnes['prenom'].'</td>';
	echo '<td>'.$donnes['mail'].'</td>';
	echo '<td>'.$donnes['telephone'].'</td>';
	echo '<td>'.$donnes['adresse'].'</td>';
	echo '<td>'.$donnes['codepostal'].'</td>';
	echo '<td>'.$donnes['ville'].'</td>';
	echo '<td>'.$donnes['message'].'</td>';
	
	echo '<td><a href="modifclient.php?id='.$donnes['idclient'].'&mode=modifier">Modifier</a></td>';
	echo '<td><a href="modifclient.php?id='.$donnes['idclient'].'&mode=supprimer">Supprimer</a></td>';
}
echo '</tbody>';
	echo '</table>';
?>