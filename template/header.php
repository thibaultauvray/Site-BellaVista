<?php 
require_once('admin2/connexion_bdd.php');
if(isset($_GET['lang'])){
	$lang=$_GET['lang'];
}
else{
	$lang="FR";
}
?>

<html>
	<head>
		 <meta charset="utf-8"/>
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
		<link rel="stylesheet" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
		<link rel="stylesheet" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
		

    	
		

		
		

		
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		
		
	


   
    

	</head>
	<body>

		<header id="left" class="bkg" >
			<div class="wrapper">
				<div class="logo">
					<a data-scroll-nav='0'> <img src="logo2.png"></a>
				</div>
				<div class='nav-container'>

				<?php		
						if($lang=="FR"){
				?>
							 <nav class="menu">
						      	<a  class="bouton2"></a>
						        <ul>
						         
						          <li>
						            <a data-scroll-nav='1' href="#villa">La Villa</a>
						          </li>
						          <li>
						            <a data-scroll-nav='2'>Tarifs</a>
						          </li>
						          
						          <li>
						            <a data-scroll-nav='3'> Services</a>
						          </li>
						           <li>
						            <a data-scroll-nav='4'>Tourisme</a>

						          </li>
						        
						        
						           <li>
						            <a data-scroll-nav='5'>Contact</a>
						          </li>
						          </ul>
						          
						      </nav>
				<?php
				}
						else{

				?>
							 <nav class="menu">
						      	<a  class="bouton2"></a>
						        <ul>
						         
						          <li>
						            <a data-scroll-nav='1' href="#villa">Villa</a>
						          </li>
						          <li>
						            <a data-scroll-nav='2'>Tariffs</a>
						          </li>
						          
						          <li>
						            <a data-scroll-nav='3'> Services</a>
						          </li>
						           <li>
						            <a data-scroll-nav='4'>Tourism</a>

						          </li>
						        
						        
						           <li>
						            <a data-scroll-nav='5'>Contact</a>
						          </li>
						          </ul>
						          
						      </nav>
						<?php
								}
								?>	
	
						     
    					</div>
								<div class="cercle">
									<div class="cercle1"> 
									<p><a href="index.php?lang=FR">FR</a></p>
								</div>
								<div class="cercle2">
									<p><a href="index.php?lang=en">EN</a></p>	
								</div>
								</div>



	



				
		</header>