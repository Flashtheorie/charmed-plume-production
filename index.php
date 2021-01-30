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
		<p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Magnam, quia, hic tempore molestias sit, perspiciatis vero dicta, atque illo explicabo iure? Ratione molestias magni assumenda fugit eveniet quasi adipisci ullam .Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		
<button type="button" class="btn btn-primary" id="see_futur-events">Voir les futurs évènements</button>
	</div>


<div id="event" class="jumbotron">
	<i class="fas fa-hand-point-left fa-3x" id="back_from_event"></i>
	<hr>
	<h1>Evenements</h1>
	<h1><?php echo strtoupper("Voici la liste des évènements blablabla démmerdez vous"); ?></h1>
</div>

<div id="whoarewe" class="jumbotron">
	<i class="fas fa-hand-point-left fa-3x" id="back_from_whoarewe"></i>
	<hr>
	<h1>Qui sommes nous</h1>
	<h1><?php echo strtoupper("NOUS SOMMES LALALALA"); ?></h1>
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

$("#back_from_event").click(function(){
	$("#event").slideUp("slow", function(){
		$("#accueil").slideDown();
	})
})


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