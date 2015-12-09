<?php
include('template/header.php');
?>

				<section data-scroll-index='0'>

						<div class="piscine">
							<div class="wrapper">
							<img src="ff.jpg">
							
						</div>
					</div>
					
						<div class="presentation">
							<div class="wrapper">
<?php
								if($lang=="FR"){
								$affichevilla = "SELECT contenu FROM page WHERE titre='accueil'"; 
								}
								else{
								$affichevilla = "SELECT contenu FROM page WHERE titre='home'"; 
								}
								$sqlvilla = $bdd->query($affichevilla);
								$tabville = $sqlvilla->fetch(PDO::FETCH_OBJ);
								echo $tabville->contenu;
								?>							</div>
						</div>
					</div>
				</section>


				<section class="villa" data-scroll-index='1' id="villa">
					

					<div class="wrapper">

						<div class="titre-page">
																													<?php		
									if($lang=="FR"){
								?>
								<h1>La Villa</h1>
								<?php
								}
								else{
									?>
									<h1>Villa</h1>
						<?php
								}
								?>
							
						</div>
						<div class="container">
			
						<div class="main">
								<div id="cbp-contentslider" class="cbp-contentslider">

									<ul>
										<li id="slide1">
																																							<?php		
									if($lang=="FR"){
								?>
								<h3>La propriété</h3>
								<?php
								}
								else{

									?>
									<h3>The property</h3>
						<?php
								}
								?>
							<div>
									<div class="cbp-content">
										<div>
										<div class="ag">
											<div id="example1" class="jj">
											
												<?php
												
												$photopropriété = "SELECT * FROM photo INNER JOIN description on id_photo =idphoto WHERE page_id=7 AND lang_id =1"; 
												$ct = 1;
												$sql_photopropriété = $bdd->query($photopropriété);
												$tabphotopropriété = $sql_photopropriété->fetchAll(PDO::FETCH_OBJ);
												foreach ($tabphotopropriété as $k) {
													if($ct==1){
														echo '<div class="grand">';											
														echo '<a class="fancybox" rel="prop" href="'.$k->chemin.'" title="'.$k->description.'" alt="'.$k->alt.'">';
														echo '<img src="'.$k->thumb.'" title="'.$k->description.'" alt="'.$k->alt.'" />';
														echo '</a>';
														echo '</div>';
														$ct++;
													}
													else{
													
														echo '<a class="fancybox" rel="prop" href="'.$k->chemin.'" title="'.$k->description.'" alt="'.$k->alt.'">';
														echo '<img  src="'.$k->thumb.'" title="'.$k->description.'" alt="'.$k->alt.'" />';
														echo '</a>';
														

													}
												}
											?>
												
												
											
										</div>	
									</div>
										<div class="ad">
											<?php
											if($lang=="FR"){
								$affichepropriete = "SELECT contenu FROM page WHERE titre='Propriété'"; 
								}
								else{
								$affichepropriete = "SELECT contenu FROM page WHERE titre='The property'"; 
								}
								$sqlprop = $bdd->query($affichepropriete);
								$tabprop = $sqlprop->fetch(PDO::FETCH_OBJ);
								echo $tabprop->contenu;
								?>
										</div>
											<div  class="reserver">
																																		<?php		
									if($lang=="FR"){
								?>
								<p><a href="http://www.abritel.fr/location-vacances/p591121"> Réserver  </a></p>
								<?php
								}
								else{
									?>
										<p><a href="http://www.abritel.fr/location-vacances/p591121"> Book  </a></p>
						<?php
								}
								?>

											</div>
											<div class="clear"></div>
										
									</div>
							</div>
										</li>
										<li id="slide2">
												<?php		
									if($lang=="FR"){
								?>
								<h3>La piscine</h3>
								<?php
								}
								else{

									?>
									<h3>The swimming-pool</h3>
						<?php
								}
								?>								<div>
									<div class="cbp-content">
										<div class="ag">
										<div id="example2" class="jj">
											
											<?php
												if($lang=="FR"){
												$photopiscine = "SELECT * FROM photo INNER JOIN description on id_photo =idphoto WHERE page_id=8 AND lang_id =1"; 
											}
											else{
												$photopiscine = "SELECT * FROM photo INNER JOIN description on id_photo =idphoto WHERE page_id=8 AND lang_id =2"; 
											}
												$ct = 1;
												$sql_photopiscine = $bdd->query($photopiscine);
												$tabphotopiscine = $sql_photopiscine->fetchAll(PDO::FETCH_OBJ);
												foreach ($tabphotopiscine as $k) {
													if($ct==1){
														echo '<div class="grand">';											
														echo '<a class="fancybox" rel="prop" href="'.$k->chemin.'" title="'.$k->description.'" alt="'.$k->alt.'">';
														echo '<img src="'.$k->thumb.'" title="'.$k->description.'" alt="'.$k->alt.'" />';
														echo '</a>';
														echo '</div>';
														$ct++;
													}
													else{
														echo '<a class="fancybox" rel="prop" href="'.$k->chemin.'" title="'.$k->description.'" alt="'.$k->alt.'">';
														echo '<img src="'.$k->thumb.'" title="'.$k->description.'" alt="'.$k->alt.'" />';
														echo '</a>';

													}
												}
											?>
												
												
											
										</div>
											
										</div>
										<div class="ad">
												<?php
											if($lang=="FR"){
								$affichepiscine = "SELECT contenu FROM page WHERE titre='Piscine'"; 
								}
								else{
								$affichepiscine = "SELECT contenu FROM page WHERE titre='The swimming-pool'"; 
								}
								$sqlpiscine = $bdd->query($affichepiscine);
								$tabpiscine = $sqlpiscine->fetch(PDO::FETCH_OBJ);
								echo $tabpiscine->contenu;
								?>
										</div>
											<div class="reserver">
																																		<?php		
									if($lang=="FR"){
								?>
								<p><a href="http://www.abritel.fr/location-vacances/p591121"> Réserver  </a></p>
								<?php
								}
								else{
									?>
										<p><a href="http://www.abritel.fr/location-vacances/p591121"> Book  </a></p>
						<?php
								}
								?>

											</div>
											<div class="clear"></div>
										
									</div>
							
										</li>
							
						<li id="slide3">
																			<?php		
									if($lang=="FR"){
								?>
								<h3>Les chambres</h3>
								<?php
								}
								else{

									?>
									<h3>The bedrooms</h3>
						<?php
								}
								?>	
							
							<div>
								<div class="cbp-content">
										<div class="ag">
											<div id="example3" class="jj">
																											<?php		
									if($lang=="FR"){
								?>
								<h1>La chambre Agapante</h1>
								<?php
								}
								else{

									?>
									<h1>The Agapante bedroom</h1>
						<?php
								}
								?>	
												
											
														<?php
												if($lang=="FR"){
												$photoagapante = "SELECT * FROM photo INNER JOIN description on id_photo =idphoto WHERE page_id=12 AND lang_id =1"; 
											}
											else{
												$photoagapante = "SELECT * FROM photo INNER JOIN description on id_photo =idphoto WHERE page_id=12 AND lang_id =2"; 
											}
												$ct = 1;
												$sql_photoagapante = $bdd->query($photoagapante);
												$tabphotoagapante = $sql_photoagapante->fetchAll(PDO::FETCH_OBJ);
												foreach ($tabphotoagapante as $k) {
													
													
														echo '<a class="fancybox" rel="prop" href="'.$k->chemin.'" title="'.$k->description.'" alt="'.$k->alt.'">';
														echo '<img  src="'.$k->thumb.'" title="'.$k->description.'" alt="'.$k->alt.'" />';
														echo '</a>';

													
												}
												?>
																																						<?php		
									if($lang=="FR"){
								?>
							<h1>La chambre Iris</h1>
								<?php
								}
								else{

									?>
									<h1>The Iris bedroom</h1>
						<?php
								}
								?>	
										
												
														<?php
												if($lang=="FR"){
												$photoiris = "SELECT * FROM photo INNER JOIN description on id_photo =idphoto WHERE page_id=13 AND lang_id =1"; 
											}
											else{
												$photoiris = "SELECT * FROM photo INNER JOIN description on id_photo =idphoto WHERE page_id=13 AND lang_id =2"; 
											}
												$ct = 1;
												$sql_photoiris = $bdd->query($photoiris);
												$tabphotoiris = $sql_photoiris->fetchAll(PDO::FETCH_OBJ);
												foreach ($tabphotoiris as $k) {
													
													
														echo '<a class="fancybox" rel="prop" href="'.$k->chemin.'" title="'.$k->description.'" alt="'.$k->alt.'">';
														echo '<img  src="'.$k->thumb.'" title="'.$k->description.'" alt="'.$k->alt.'" />';
														echo '</a>';

													
												}
												?>
											
																																												<?php		
									if($lang=="FR"){
								?>
							<h1>La chambre Mimosas</h1>
								<?php
								}
								else{

									?>
									<h1>The Mimosas bedroom</h1>
						<?php
								}
								?>	
												
																	<?php
												if($lang=="FR"){
												$photomimosa = "SELECT * FROM photo INNER JOIN description on id_photo =idphoto WHERE page_id=14 AND lang_id =1"; 
											}
											else{
												$photomimosa = "SELECT * FROM photo INNER JOIN description on id_photo =idphoto WHERE page_id=14 AND lang_id =2"; 
											}
												$ct = 1;
												$sql_photomimosa = $bdd->query($photomimosa);
												$tabphotomimosa = $sql_photomimosa->fetchAll(PDO::FETCH_OBJ);
												foreach ($tabphotomimosa as $k) {
													
													
														echo '<a class="fancybox" rel="prop" href="'.$k->chemin.'" title="'.$k->description.'" alt="'.$k->alt.'">';
														echo '<img src="'.$k->thumb.'" title="'.$k->description.'" alt="'.$k->alt.'" />';
														echo '</a>';

													
												}
												?>
																																													<?php		
									if($lang=="FR"){
								?>
							<h1>La chambre Palmiers</h1>
								<?php
								}
								else{

									?>
									<h1>The Palmiers bedroom</h1>
						<?php
								}
								?>	
										
												
																		<?php
												if($lang=="FR"){
												$photopalmier= "SELECT * FROM photo INNER JOIN description on id_photo =idphoto WHERE page_id=15 AND lang_id =1"; 
											}
											else{
												$photopalmier = "SELECT * FROM photo INNER JOIN description on id_photo =idphoto WHERE page_id=15 AND lang_id =2"; 
											}
												$ct = 1;
												$sql_photopalmier = $bdd->query($photopalmier);
												$tabphotopalmier = $sql_photopalmier->fetchAll(PDO::FETCH_OBJ);
												foreach ($tabphotopalmier as $k) {
													
													
														echo '<a class="fancybox" rel="prop" href="'.$k->chemin.'" title="'.$k->description.'" alt="'.$k->alt.'">';
														echo '<img  src="'.$k->thumb.'" title="'.$k->description.'" alt="'.$k->alt.'" />';
														echo '</a>';

													
												}
												?>
																																													<?php		
									if($lang=="FR"){
								?>
							<h1>La chambre Reseda</h1>
								<?php
								}
								else{

									?>
									<h1>The Reseda bedroom</h1>
						<?php
								}
								?>	
										
												
																				<?php
												if($lang=="FR"){
												$photoReseda= "SELECT * FROM photo INNER JOIN description on id_photo =idphoto WHERE page_id=15 AND lang_id =1"; 
											}
											else{
												$photoReseda = "SELECT * FROM photo INNER JOIN description on id_photo =idphoto WHERE page_id=15 AND lang_id =2"; 
											}
												$ct = 1;
												$sql_photoReseda = $bdd->query($photoReseda);
												$tabphotoReseda = $sql_photoReseda->fetchAll(PDO::FETCH_OBJ);
												foreach ($tabphotoReseda as $k) {
													
													
														echo '<a class="fancybox" rel="prop" href="'.$k->chemin.'" title="'.$k->description.'" alt="'.$k->alt.'">';
														echo '<img  src="'.$k->thumb.'" title="'.$k->description.'" alt="'.$k->alt.'" />';
														echo '</a>';

													
												}
												?>
														
													
											</div>
											
										</div>


										<div class="ad">

											<div class="agapante">
											<?php
												if($lang=="FR"){
													$afficheagapante = "SELECT contenu FROM page WHERE titre='La chambre Agapante'"; 
												}
												else{
													$afficheagapante = "SELECT contenu FROM page WHERE titre='The AGAPANTE bedroom'"; 
												}
												$sqlagapante = $bdd->query($afficheagapante);
												$tabagapante = $sqlagapante->fetch(PDO::FETCH_OBJ);
												echo $tabagapante->contenu;
								?>
												
											</div>

											<div class="iris">
												<?php
															if($lang=="FR"){
													$afficheiris = "SELECT contenu FROM page WHERE titre='La chambre iris'"; 
												}
												else{
													$afficheiris = "SELECT contenu FROM page WHERE titre='The IRIS bedroom'"; 
												}
												$sqliris = $bdd->query($afficheiris);
												$tabiris = $sqliris->fetch(PDO::FETCH_OBJ);
												echo $tabiris->contenu;
								?>
											
											</div>

												<div class="mimosa">
																	<?php
															if($lang=="FR"){
													$affichemimosa = "SELECT contenu FROM page WHERE titre='La chambre mimosa'"; 
												}
												else{
													$affichemimosa = "SELECT contenu FROM page WHERE titre='The MIMOSA bedroom'"; 
												}
												$sqlmimosa = $bdd->query($affichemimosa);
												$tabmimosa = $sqlmimosa->fetch(PDO::FETCH_OBJ);
												echo $tabmimosa->contenu;
								?>
												
											</div>

								
											<div class="palmier">
												<?php
															if($lang=="FR"){
													$affichepalmier = "SELECT contenu FROM page WHERE titre='La chambre palmier'"; 
												}
												else{
													$affichepalmier = "SELECT contenu FROM page WHERE titre='The PALMIERS bedroom'"; 
												}
												$sqlaffichpalmier = $bdd->query($affichepalmier);
												$tabpalmier = $sqlaffichpalmier->fetch(PDO::FETCH_OBJ);
												echo $tabpalmier->contenu;
								?>
											
											</div>
										<div class="reseda">
													<?php
															if($lang=="FR"){
													$affichereseda = "SELECT contenu FROM page WHERE titre='La chambre Reseda'"; 
												}
												else{
													$affichereseda = "SELECT contenu FROM page WHERE titre='the RESEDA bedroom'"; 
												}
												$sqlaffichereseda = $bdd->query($affichereseda);
												$tabreseda = $sqlaffichereseda->fetch(PDO::FETCH_OBJ);
												echo $tabreseda->contenu;
								?>
											
											</div>
										</div>
											<div class="reserver">
																						<?php		
									if($lang=="FR"){
								?>
								<p><a href="http://www.abritel.fr/location-vacances/p591121"> Réserver  </a></p>
								<?php
								}
								else{
									?>
										<p><a href="http://www.abritel.fr/location-vacances/p591121"> Book  </a></p>
						<?php
								}
								?>
												
											</div>
											<div class="clear"></div>

										
								</div>
							
						
						</li>
						<li id="slide4">
							<h3 > Salles à vivre</h3>
							<div>
								<div class="cbp-content">
										<div class="ag">
										<div id="example4" class="jj">
											
											<?php
												if($lang=="FR"){
												$photovivre = "SELECT * FROM photo INNER JOIN description on id_photo =idphoto WHERE page_id=10 AND lang_id =1"; 
											}
											else{
												$photovivre = "SELECT * FROM photo INNER JOIN description on id_photo =idphoto WHERE page_id=10 AND lang_id =2"; 
											}
												$ct = 1;
												$sql_photovivre = $bdd->query($photovivre);
												$tabphotovivre = $sql_photovivre->fetchAll(PDO::FETCH_OBJ);
												foreach ($tabphotovivre as $k) {
													if($ct==1){
														echo '<div class="grand">';											
														echo '<a class="fancybox" rel="prop" href="'.$k->chemin.'" title="'.$k->description.'" alt="'.$k->alt.'">';
														echo '<img src="'.$k->thumb.'" title="'.$k->description.'" alt="'.$k->alt.'" />';
														echo '</a>';
														echo '</div>';
														$ct++;
													}
													else{
														echo '<a class="fancybox" rel="prop" href="'.$k->chemin.'" title="'.$k->description.'" alt="'.$k->alt.'">';
														echo '<img  src="'.$k->thumb.'" title="'.$k->description.'" alt="'.$k->alt.'" />';
														echo '</a>';

													}
												}
											?>
												
											
										</div>
											
										</div>
										<div class="ad">
											<?php
															if($lang=="FR"){
													$affichevivre = "SELECT contenu FROM page WHERE titre='Salles a vivres'"; 
												}
												else{
													$affichevivre = "SELECT contenu FROM page WHERE titre='Living rooms'"; 
												}
												$sqlaffichevivre = $bdd->query($affichevivre);
												$tabvivre = $sqlaffichevivre->fetch(PDO::FETCH_OBJ);
												echo $tabvivre->contenu;
								?>
										</div>

											<div  class="reserver">
										<?php		
									if($lang=="FR"){
								?>
								<p> <a href="http://www.abritel.fr/location-vacances/p591121">Réserver </a>  </p>
								<?php
								}
								else{
									?>
										<p><a href="http://www.abritel.fr/location-vacances/p591121"> Book  </a></p>
						<?php
								}
								?>
												

											</div>
											<div class="clear"></div>
										
									</div>
							
						</li>
						
					</ul>
					<nav>							
					<?php
						if($lang=="FR"){
								?>
								<a href="#slide1" >La propriété</a>
						<a href="#slide2" >La piscine</a>
						<a href="#slide3" >Les chambres</a>
						<a href="#slide4" >Salles à vivre</a>
						<?php
								}
								else{
									?>
						<a href="#slide1" >The property</a>
						<a href="#slide2" >The swimming-pool</a>
						<a href="#slide3" >The bedrooms</a>
						<a href="#slide4" >Living rooms</a>
						<?php
								}
								?>
						
						
					</nav>
				</div>
			</div>
		</div>











						
						
				</section>


				<section class="tarifs" data-scroll-index='2'>
					
					<div class="wrapper">

						<div class="titre-page">
							<?php
							if($lang=="FR"){
									echo "<h1>Tarifs</h1>";
								}
								else{
									echo "<h1>Tariffs</h1>";
								}
							?>
						</div>
						<div class="left">
						<div class="titretableau">
							<ul> 
								<?php
								if($lang=="FR"){
									echo "<li> La location est possible toute l'année par semaine(s), par W.E et par mois </li>";
								}
								else{
									echo "<li>The rent is available all year round weekly, weekend basis or monthly.</li>";
								}

								?>
								
							</ul> 				
						</div>
						


						<div class="tarification">

							<?php
															if($lang=="FR"){
													$affichetarif = "SELECT contenu FROM page WHERE titre='Tarifs'"; 
												}
												else{
													$affichetarif = "SELECT contenu FROM page WHERE titre='Tariffs'"; 
												}
												$sqlaffichetarif = $bdd->query($affichetarif);
												$tabtarif = $sqlaffichetarif->fetch(PDO::FETCH_OBJ);
												echo $tabtarif->contenu;
								?>
						</div>
					</DIV>
						<div class="mobile3">
						
							<div class="right2">

								
								<div class="text"> 
					<?php
															if($lang=="FR"){
								?>
							<p><a href="http://www.abritel.fr/location-vacances/p591121">  Consulter le planing des locations </a></p>
						<?php
								}
								else{
									?>
						<p><a href="http://www.abritel.fr/location-vacances/p591121">  Consult planing rental </a></p>
						<?php
								}
								?>
									
								</div>

								<div class="image">
									<img src="abritel.jpg">
								</div>
							
							</div>	
						</div>
					</div>
				
				</section>
				<div class="separation">
					
						
				</div>


				<section class="services" data-scroll-index='3'>
					<div class="wrapper">

						<div class="titre-page">
							<h1>Services</h1>
						</div>
						<div class="left1">
						<div class="contenu-serv1">
							<?php
															if($lang=="FR"){
													$afficheservice = "SELECT contenu FROM page WHERE titre='Les services'"; 
												}
												else{
													$afficheservice = "SELECT contenu FROM page WHERE titre='Services'"; 
												}
												$sqlafficheservice = $bdd->query($afficheservice);
												$tabservice = $sqlafficheservice->fetch(PDO::FETCH_OBJ);
												echo $tabservice->contenu;
								?>
								

						</div>
						</div>
						<div class="mobile4">
							<div class="right1">
								<div class="haut">
										<?php
															if($lang=="FR"){
								?>
							<p>Contactez moi pour des renseignements plus complets notamment sur l’équipement de la villa</p>
						<?php
								}
								else{
									?>
						<p><a href="http://www.abritel.fr/location-vacances/p591121">  Contact me for more information about a particular equipment of the villa </a></p>
						<?php
								}
								?>
									

																																					</div>
								<div class="bas"><h1> <a data-scroll-nav='5'>  CONTACT</a> </h1>
								</div>

							</div>
						</div>
					</div>
				</section>

				<div class="separation2">
					
						
				</div>
				<section class="tourisme" data-scroll-index='4'>
					<div class="wrapper">

						<div class="titre-page">
														<?php
															if($lang=="FR"){
								?>
							<h1>Tourisme</h1>
						<?php
								}
								else{
									?>
						<h1>Tourism</h1>
						<?php
								}
								?>
							
						</div>
						
						<div class="la">
							<ul> 
														<?php
															if($lang=="FR"){
								?>
							<li>Retrouver les informations sur :  <span class="lien"><a href="http://www.cotedazur-en-fetes.com/">côted'azure-en-fête.com</a></span> <span class="lien"><a href="http://www.antibes-juanlespins.com/">antibes-juanlespins.com</a></span> </li> 
						<?php
								}
								else{
									?>
					<li>Find some information on :  <span class="lien"><a href="http://www.cotedazur-en-fetes.com/">côted'azure-en-fête.com</a></span> <span class="lien"><a href="http://www.antibes-juanlespins.com/">antibes-juanlespins.com</a></span> </li> 
						<?php
								}
								?>
								
							</ul>
						</div>
						<div class="z">

								
								<div class="ligneA">
										<div class="cont1">
									<?php
										if($lang=="FR"){
									?>
										<p>Le port de cannes</p>
						<?php
								}
								else{
									?>
										<p>The port of Cannes</p>
						<?php
								}
								?>
											
										</div>
										<div class="cont2"><img src="tourisme1.jpg"></div>
								</div>
								
								<div class="ligneB">
										
										<div class="cont2"><img src="tourisme2.jpg"></div>
										<div class="cont3">
										<?php
										if($lang=="FR"){
									?>
										<p>A 10 km seulement de la Méditerranée, bâti sur un socle rocheux à 800 m d'altitude,Gourdon domine la Vallée du Loup.Le panorama s'étale sur 80 km de Nice à Théoule.</p>
						<?php
								}
								else{
									?>
										<p>10 km away from the Méditerranée, built on a bedrock at an altitude of 800 m,Gourdon dominates “la Vallée du Loup”.The panorama spreads on 80 km from Nice to Théoule.</p>
						<?php
								}
								?>
										</div>
								</div>

								<div class="ligneC">
										<div class="cont1">
																				<?php
										if($lang=="FR"){
									?>
										<p>Le village historique de Saint Paul de Vence, ceint de remparts illuminés et dominant les vallées, prête à la contemplation. </p>
						<?php
								}
								else{
									?>
										<p>The historic village of Saint Paul de Vence,surrounded by illuminated ramparts and dominating the valleys, lead to contemplation</p>
						<?php
								}
								?>
								</div>
										<div class="cont2"><img src="tourisme3.jpg"></div>
								</div>

								<div class="ligneD">
										
										<div class="cont2"><img src="tourisme4.jpg"></div>
										<div class="cont1">
									<?php
										if($lang=="FR"){
									?>
										<p>Le marché provençal du cours Masséna étale chaque matin ses riches éventaires, festival de senteurs et d''accent.  </p>
						<?php
								}
								else{
									?>
										<p>Every morning , Massena’s provencal market spreads its rich stalls, a festival of scent and accent. Medieval jewel ideally located to the east of Antibes, </p>
						<?php
								}
								?>
											
										</div>
								</div>
						</div>	
							</div>
				
				</section>

			<section class="plan" data-scroll-index='5'>
					<div class="wrapper">

						<div class="titre-page">
							<h1>Contact</h1>
						</div>
						<div class="tab">
					<div class="mob5">
						<div class="formulaire">
							   
							
									<?php
										if($lang=="FR"){
											$nom = "Nom";
											$prenom = "Prénom";
											$mail ="Adresse Mail";
											$adresse = "Adresse";
											$code = "Code Postal";
											$ville = "Ville";
											$telephone = "Téléphone";
											$envoyer = "Envoyer";

								}
								else{
											$nom = "Last name";
											$prenom = "First name";
											$mail ="Email adress";
											$adresse = "Adress";
											$code = "ZIP Code";
											$ville = "Town";
											$telephone = "Phone";
											$envoyer = "Submit";
								}
								?>
								
	
									<FORM action="process.php" id="contact" method="POST">

								<TABLE BORDER=0>
								
	
									<TR>
										<TD><label for="nom" class="nom"><?php echo $nom; ?></label></TD>
										<TD><input id="nom" name="nom" type="text"></TD></TR>
										<TR><td colspan="2" style="color:red;"><span id="msg_nom"></span></td></tr>
									
	
									<TR>
										<TD><label for="prenom" class="prenom"><?php echo $prenom; ?></label></TD>
										<TD><input id="prenom" name="prenom" type="text"></TD></tr>
										<tr>
										<td colspan="2" style="color:red;"><span id="msg_prenom"></span></td>
									</TR>
									

									<TR>
										<TD><label for="mail" class="mail"><?php echo $mail; ?></label></TD>
										<TD><input id="mail" name="mail" type="mail"></TD>	</TR>
										<TR><td colspan="2" style="color:red;"><span id="msg_mail"></span></td>
									</TR>
						
					
									<TR>
										<TD><label for="adresse" class="adresse"><?php echo $adresse; ?></label></TD>
										<TD><input id="adresse" name="adresse" type="text"></TD></tr>
										<tr><td colspan="2" style="color:red;"><span id="msg_adresse"></span></td>
									</TR>
						
									
									<TR>
										<TD><label for="codepostal" class="codepostal"><?php echo $code; ?></label></TD>
										<TD><input id="codepostal" name="codepostal" type="text"></TD></tr><tr>
										<td colspan="2" style="color:red;"><span id="msg_codepostal"></span></td>
									
									</TR>
							
									<TR>
										<TD><label for="ville" class="ville"><?php echo $ville; ?></label></TD>
										<TD><input id="ville" name="ville" type="text"></TD></tr><tr>
										<td colspan="2" style="color:red;"><span id="msg_ville"></span></td>
										
									</TR>
						
									<TR>
									<TD><label for="telephone" class="telephone"><?php echo $telephone; ?></label></TD>
									<TD><input id="telephone" name="telephone" type="text"></TD></tr><tr>
									<td colspan="2" style="color:red;"><span id="msg_telephone"></span></td>
									
									</TR>
									</TABLE>
									<div class="mess">
									<TABLE>
									
									<TR>
										<TD><label for="message">Message</label></TD>
										
										<TD>	<textarea name="message" id="message" rows="5" cols="20"></textarea></TD></tr><tr>
										<td colspan="2" style="color:red;"><span id="msg_message"></span></td>
												
									</TR>
								
									
								
								</TABLE>
									</div>

						<div class="bouton">	<?php
						echo '<input type="submit" value="'.$envoyer.'">';
						?>
						</form></TD></div>
							

						</FORM>
						
					
				</div>
			
					<div class="right4">
							
							<div class="image">
								<?php
								if($lang=="FR"){
												$photonicole = "SELECT * FROM photo INNER JOIN description on id_photo =idphoto WHERE page_id=33 AND lang_id =1"; 
											}
											else{
												$photonicole = "SELECT * FROM photo INNER JOIN description on id_photo =idphoto WHERE page_id=33 AND lang_id =2"; 
											}
												$ct = 1;
												$sql_photonicole = $bdd->query($photonicole);
												$tabphotonicole = $sql_photonicole->fetchAll(PDO::FETCH_OBJ);
												foreach ($tabphotonicole as $k) {
													
													
														
														echo '<img  src="'.$k->chemin.'" title="'.$k->description.'" alt="'.$k->alt.'" />';
														

													
												}
								?>
							
							</div>	
							<div class="text2"> 
								<?php
										if($lang=="FR"){
									echo "<p> La propriétaire Nicole Lecomte</p>";

								}
								else{
									echo "<p> The owner Nicole Lecomte</p>";
								}
								?>
								
							</div>

					</div>
			
					</div>
			</div>
		</div>

				<div id="map">
				</div>

			</section>	

			
		
		<footer>
			<div class="wrapper">
				<div class="lfoot">

				<ul class="foot">
											<?php
										if($lang=="FR"){
											?>
					<li> <a data-scroll-nav='5'> Contact</a><span class="espace">/</span></li>
					<li> <a href="mention.html">Mentions légales</a><span class="espace">/</span></li>
					<li><a href="http://www.abritel.fr/location-vacances/p591121">Abritel</a> </li>
<?php
								}
								else{
								?>
					<li> <a data-scroll-nav='5'> Contact</a><span class="espace">/</span></li>
					<li> <a href="mention.html">Légal Notice</a><span class="espace">/</span></li>
					<li><a href="http://www.abritel.fr/location-vacances/p591121">Abritel</a> </li>
								<?php
								}
								?>

				</ul>
</div>
			</div>

		</footer>
	
	</body>
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script src='js/scrollIt.js' type='text/javascript'></script>
    <script>$(function() { $.scrollIt(); });</script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
	 <script src="js/global2.js"></script>
	  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/function.js"></script>

    <script src="js/jquery.cbpContentSlider.min.js"></script>
    <script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	
	
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			

			// Disable opening and closing animations, change title type
			

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,
				fixed: false,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,
fixed: false,
				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

		});
	</script>
  
    
    <script>
			(function($) {
				/*
				- how to call the plugin:
				$( selector ).cbpContentSlider( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 500,
					// default transition easing
					easing : 'ease-in-out',
					// current item's index
					current : 0
				}
				- destroy:
				$( selector ).cbpContentSlider( 'destroy' );
				*/


				if (window.matchMedia("(min-width: 768px)").matches)
				{
					$( '#cbp-contentslider' ).cbpContentSlider();

					$(".jj").mCustomScrollbar({
						autoHideScrollbar:false,
						advanced: {updateOnContentResize: true},
						theme:"dark-thick"
					});
					$(".ad").mCustomScrollbar({
						autoHideScrollbar:false,
						advanced: {updateOnContentResize: true},
						theme:"dark-thick"
					});
				}
				
				
			})(jQuery);
		</script>

<script type="text/javascript">
    $(function(){
        $("#contact").submit(function(event){
           			function isEmail(myVar){
     // La 1ère étape consiste à définir l'expression régulière d'une adresse email
     var regEmail = new RegExp('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$','i');

     return regEmail.test(myVar);
   }
              			function isTel(myVar){
     // La 1ère étape consiste à définir l'expression régulière d'une adresse email
     var regTel = new RegExp('^0[1-8]([-. ]?[0-9]{2}){4}$','i');

     return regTel.test(myVar);
   }
               			function isCode(myVar){
     // La 1ère étape consiste à définir l'expression régulière d'une adresse email
     var regCode = new RegExp('^[0-9]{4,5}$','i');

     return regCode.test(myVar);
   }
   				


			var nom = $("#nom").val();
            var prenom 		= $("#prenom").val();
            var email = $("#mail").val();
			var adresse 	= $("#adresse");
            var message = $("#message").val();
			var tel = $("#telephone").val();
			var ville = $("#ville").val();

			var codepostal = $("#codepostal").val();
            var dataString = nom + email + message;
            var msg_all    = 'Merci de remplir tous les champs';
            var msg_alert  = 'Merci de remplir ce champs';
			var testMail = isEmail(email);
			var testTel = isTel(tel);

			var testCode = isCode(codepostal);
		
			var error = true;
			



            if(testMail != true)
			{
				 $('#msg_mail').html('Veuillez rentrez une adresse mail valide');
				error =false;
			}
			if(testTel != true)
			{
				 $('#msg_telephone').html('Veuillez rentrez un telephone valide');
				error =false;
			}
			if(testCode == false)
			{
				$('#msg_codepostal').html('Veuillez rentrez un code postal valide');
				error =false;
				
			}
			if(prenom == '')
			{
				$('#msg_prenom').html(msg_alert);
				error =false;
			}
			if(adresse == '')
			{
				$('#msg_adresse').html(msg_alert);
				error =false;
			}
			if(codepostal == '')
			{
				$('#msg_codepostal').html(msg_alert);
				error =false;
			}
			if(tel == '')
			{
				$('#msg_telephone').html(msg_alert);
				error =false;
			}
			if(ville == '')
			{
				$('#msg_ville').html(msg_alert);
				error =false;
			}

			if(nom == '')
            {
                $('#msg_nom').html(msg_alert);
error =false;
            }
			if(email == '')
            {
                $('#msg_mail').html(msg_alert);
error =false;
            }
				 if(message == '')
            {
                $('#msg_message').html(msg_alert);
error =false;
            }
			if(error == true)
            {
                $.ajax({
                    type : "POST",
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success : function(){
                        $('#contact').html('<p>Formulaire bien envoyé</p>');
                    },
                    error: function(){
                        $('#contact').html("<p>Erreur d'appel, le formulaire ne peut pas fonctionner</p>");
                    }
                });
            }
            return false;
        });
    });
</script>









	<!--<script type="text/javascript" src="nav.js"></script>	

		<script src="js/flaunt.js"></script><-->
	
		
</html>