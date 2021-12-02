<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="public/css/reservation.css" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<title id="titreReservaton">Réservation</title>
	</head>
	<body>
		<div class="container">
			<h1 class="titreProduits">Réservation</h1>
			<div class="row">
				<div class="elementPage">
					<div class="col-3 il">
						<label for="datelb">Choisir une date :</label>
						<input id="datelb" type="date" min="2021/12/02" max="2023/12/12" />
					</div>
					<div class="col-3 il">
						<label for="nombreReservation">Nombre de place :</label>
						<select id="nombreReservation">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
					</div>
				</div>
				<input type="button" id="bouttonReserver" value="Reserver">
			</div>
		</div>

		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
			crossorigin="anonymous"
		></script>
	</body>
</html>
