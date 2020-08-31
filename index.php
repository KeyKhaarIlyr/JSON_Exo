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
	<main class="d-flex row justify-content-around">
		<h1 class="col-12">Exo JSON !</h1>
		<?php

		for ($i = 0; $i < 6; $i++) {
			echo '<div class="card col-3 m-1">
			<h3 class="card-header"> ' .
				getInfo("firstName", $i) . ' ' . getInfo("lastName", $i) . '
			</h3>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Gender: 
					' . getInfo("gender", $i) . '
					</li>
				<li class="list-group-item">Age: ' .
				getInfo("age", $i) . '</li>
				<li class="list-group-item">Area: ' .
				getInfo("area", $i) . '</li>
				<li class="list-group-item">Powers: ' .
				getInfo("powers", $i) . '</li>
			</ul>
		</div>';
		}

		?>
	</main>
</body>

</html>