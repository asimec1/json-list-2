<?php
	$url = 'http://localhost/test/v2/object/cars.json'; // path to your JSON file
	$data = file_get_contents($url); // put the contents of the file into a variable
	$cars = json_decode($data); // decode the JSON feed
	print '
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <title>Cars</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>

	<div class="container">
	  <h2>List of cars</h2>
	  <table class="table">
		<thead>
		  <tr>
			<th>Name</th>
			<th>Cylinders</th>
			<th>Horsepower</th>
			<th>Year</th>
		  </tr>
		</thead>
		<tbody>';
		//select and display all cars
		foreach ($cars as $car) {
			echo '
			<tr>
				<td>' . $car->Name . '</td>
				<td>' . $car->Cylinders . '</td>
				<td>' . $car->Horsepower . '</td>
				<td>' . $car->Year . '</td>
			</tr>';
		}
		print '
		</tbody>
	  </table>
	</div>

	</body>
	</html>';
?>