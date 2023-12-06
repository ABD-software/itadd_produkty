<html lang="pl-PL">
  <head>
    <title>Custom BackOffice ✅</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<script src="ajax/script.js"></script>
  </head>
  <body>
  	<div class="jumbotron">
		<h4 class="display-4 text-center">Custom BackOffice </h4>
	</div>
	<div class="container">
	  <ul>
		<li>
			MySQL: <?php include ('inc/db.php'); ?>
		</li>
		<li>
			wykonanie prostego zapytania select:
			<input type="number" placeholder="id produktu" id="liczba"/>
			<button class="btn btn-warning btn-sm" id="search_button">Szukaj</button>
		</li>
		<li>
			wyświetlenie danych
			<p id="wynik"></p>
		</li>
	  </ul>
	</div>
  </body>
</html>
