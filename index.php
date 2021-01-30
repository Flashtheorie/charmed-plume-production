<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Accueil</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="icon" type="image/png" href="assets/img/feather.png" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
</head>
<body >
<style>
<style>

</style>
</style>

<?php include_once 'navbar.php'; ?>

<div class="background_img">
	<img src="assets/img/background.png" alt="background_img" class="img-fluid">
	
</div>


</div>
<div class="container">
	<br>
	<div class="jumbotron" align="center" id="accueil">
		<img src="assets/img/logo_index.png" alt="" class="img-fluid" width="500px">
		<hr>
		<p>Charmed Plume Productions est une association à but non-lucratif qui vise à créer des évènements immersifs (appelés GN). 
		<br>Nous trouvons notre inspiration dans l'histoire et des mondes imaginaires (comme Harry Potter ou le Seigneur des Anneaux).</p>


<p>Nos mondes sont créés avec l'aide d'écrivains et designers de jeux qui ont évolué dans le milieu du GN à l'internationale depuis des années.</p>
<button type="button" class="btn btn-primary" id="see_futur-events">Voir les futurs évènements</button>
<hr>

		

	</div>


<div id="event" class="jumbotron" align="center">
	
	
	<img src="assets/img/logo_MOM.png" alt="" width="350px" id="mom_logo">
<h3><strong>23 - 26 Septembre 2021</strong></h3>
<br><hr>
<p>Nous sommes en l'an de grâce 1520, deux des rois les plus connus de la Renaissance se rencontrent pour la toute première fois. Henry VIII d'Angleterre ey François 1er de France vous souhaitent la bienvenue, au Camp du Drap d'Or !</p>

<p>Le Camp du Drap d'Or est l'évènement politique le plus célébré et luxueux de l'histoire Européenne. Pour cette occassion exceptionnelle, les deux rois ont fait venir leurs cour royale, afin de renouveller leur amitié et la paix entre la France et l'Angleterre.
Cependant, tout n'est pas aussi simple qu'il n'y paraît et la royauté change d'alliances sur un coupe de tête...</p>

<p>Venez découvrir l'Europe à la Renaissance, en incarnant un personnage comme Anne Boleyn, Claude de France ou Leonardo De Vinci.</p>

<p>Les personnes qui ont participé à la création de A Meeting of Monarchs sont : John Shockley (designer et écrivain), Nandor Laklia, Zsofia Diana Szalay, Jim « Lucky » Walsemann, Balint Turi, et Chris Hartford.</p>
<hr>
<a href="#" class="btn btn-primary">Visiter le site</a>
</div>

<div id="whoarewe" class="jumbotron" align="center">
	
	
	<h1>Qui sommes nous</h1>
	
	<br>
	<div class="card mb-3">
  <h3 class="card-header">Lisa Wolfrum</h3>
  <div class="card-body">
    <h5 class="card-title">Présidente</h5>
    
  </div>
  <img src="assets/img/lisa.jpg" class="img-fluid img-thumbnail" alt="" style="width: 50%">
  <div class="card-body">
    <p class="card-text">Lisa Wolfrum est la fondatrice et la présidente de l'association. Ayant travaillé pendant plusieurs années pour l'entreprise Danoise Dziobak Larp Studios sur des productions comme College of Wizardry et Fairweather Manor, elle a développé une grande passion pour les jeux Grandeur Nature (GN) et a pu constater que les productions hyper immersifs de style « Nordic Blockbuster » n'étaient pas beaucoup représentés en France.</p>

<p class="card-text">Sa mission est donc de créer des jeux immersifs inspirés par des univers imaginaires et historiques à un public international, en France. Toujours en visant pour des décors, costumes et lieux d'exception.</p>


<p class="card-text">Lisa a un Master en Tourisme, Patrimoine et Evènementiel, et une Licence en Langue, Litérature et Civilisation Anglaise. Ce sont ces formations qui lui donné l'idée de donner vie à l'Histoire à travers des personnages, le port de costumes, la participation dans des scénarions et des décors historiques. Même avant qu'elle ne connaisse le GN, elle voulait faire des spectateurs des acteurs.</p>
  </div>
  
  
  <div class="card-footer text-muted">
    
  </div>
</div>

</div>
<script>




$(document).ready(function(){
$("#event").hide();
$("#whoarewe").hide();

$("#see_futur-events").click(function(){
	$("#accueil").slideUp("slow", function(){
		$("#event").slideDown("slow");
	});
	
});




$("#see_futur-events_navbar").click(function(){
	$("#accueil").slideUp("slow", function(){
		$("#whoarewe").slideUp()
		$("#event").slideDown("slow");
	});
	
});

$("#see_whoarewe").click(function(){
	$("#accueil").slideUp(function(){
		$("#event").slideUp()
		$("#whoarewe").slideDown("slow")
	})
})

$("#back_from_whoarewe").click(function(){
	$("#whoarewe").slideUp("slow", function(){
		$("#accueil").slideDown();
	});
});


$("#see_accueil").click(function(){
	$("#whoarewe").slideUp();
	$("#event").slideUp();
	$("#accueil").slideDown("slow");
})

}); // Fin document ready
</script>
</div>
</body>
</html>