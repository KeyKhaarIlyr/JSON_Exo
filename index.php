<?php
include 'src/rooter.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="styles/bootstrap.min.css">
</head>

<body>
	<main class="d-flex justify-content-around">
		<h1>Exo JSON !</h1>
		<div class="card mb-3">
			<h3 class="card-header">
				<?php
				getInfo("firstName", gaiem);
				echo " ";
				getInfo("lastName", gaiem);
				?>
			</h3>
			<div class="card-body">
				<h5 class="card-title">Special title treatment</h5>
				<h6 class="card-subtitle text-muted">Support card subtitle</h6>
			</div>
			<div class="card-body">
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Cras justo odio</li>
				<li class="list-group-item">Dapibus ac facilisis in</li>
				<li class="list-group-item">Vestibulum at eros</li>
			</ul>
		</div>
	</main>
</body>

</html>