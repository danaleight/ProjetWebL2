<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Share My House</title>
		<link rel="stylesheet" href="./stylecss/general.css">
	</head>
	<body>
		<header>
			<div class="banner-top">
				<a href="index.php"><img class="logo logo-img" alt="website-logo" title="page d'accueil" src="ressources/logo.png" width="48" height="48"></a>
				<div class="button">
					<a class="button" href="">Louer votre bien</a>
				</div>
				<a href=""><img class="logo-img" src="ressources/search.jpg" width="48" heigh="48"></a>
			</div>
			<div class="banner-bot">
				<form method="get">
					<div class="form-destination">
						<h3>Destination</h3>
						<input type="text" name="user_destination" placeholder="Où voulez-vous aller ?">
					</div>
					<div class="form-arrival">
						<h3>Arrivée</h3>
						<input type="date" name="user_arrival" placeholder="Quand arrivez-vous ?">
					</div>
					<div class="form-departure">
						<h3>Départ</h3>
						<input type="date" name="user_departure" placeholder="Jusque quand ?">
					</div>
					<div class="form-people">
						<h3>Nombre de personne</h3>
						<input type="number" name="user_people" value="1" min="1" max="16">
					</div>
				</form>
			</div>
		</header>
	</body>
</html>
