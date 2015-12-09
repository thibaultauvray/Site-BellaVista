<?php
session_start(); 
if(empty($_SESSION['login'])){
  header('Location:index.php');
}
require_once('connexion_bdd.php');

?>

<!DOCTYPE html>

<html>
    <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="assets/css/admin.css">
      <script src="assets/js/jquery.min.js"></script>

       <link rel="stylesheet" href="assets/css/main.css" type="text/css" />
       <link rel="stylesheet" href="assets/css/demos.css" type="text/css" />
      <link rel="stylesheet" href="assets/css/jquery.Jcrop.css" type="text/css" />
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <script src="assets/js/tinymce/tinymce.min.js"></script>

<script type="text/javascript">
tinymce.init({
        selector: "textarea",
        width : 500,
        height: 300,
        plugins: [
                "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime  nonbreaking",
                "table contextmenu directionality  template textcolor paste fullpage textcolor"
        ],

        toolbar1: "bold italic underline strikethrough | alignleft aligncenter alignright alignjustify",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink  code | inserttime preview | forecolor backcolor",
        toolbar3: "hr subscript superscript | charmap  | print  | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

        menubar: false,
        toolbar_items_size: 'small',

        style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],

        templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
        ]
});
</script>


</script>

     </head>

     <body>

	<header>
		    <div class="navbar navbar-fixed-top">
    <?php $menu = $bdd->query("SELECT *, page.id as id_page FROM page 
INNER JOIN lang
ON lang.id=lang_id
WHERE (id_menu=0 OR id_menu = 3 OR id_menu = 7) AND libelle='francais'
");  
          $tab = $menu->fetchAll(PDO::FETCH_OBJ);
          ?>
        		<ul class="nav" style="width:100%">
            <?php
            foreach ($tab as $k) {
                
                echo '<li><a href="accueil.php?id='.$k->id_page.'&id_menu='.$k->id_menu.'">'.$k->titre.'</a></li>';

            }
            ?>
            <li><a href="client.php">Client</a></li>
             <li style="float:right;"><a href="logout.php">Se déconnecter</a></li>
    				<li style="float:right;"><a href="accueil.php?mode=outil">Outil</a></li>

   					
    </ul>

					</div>
	</header>