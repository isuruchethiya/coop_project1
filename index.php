<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Coop || members selectct Form</title>
	<link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

	<style>
		.navbar-brand img {
			width: 80px;
			/* Adjust the width as needed */
			height: auto;
			/* Maintain the aspect ratio */
		}

		.banner {
			display: flex;
			align-items: center;
			justify-content: space-between;
		}

		.banner-left-div img {
			width: 100%;
		}

		.banner-right-div {
			width: 40%;
			text-align: right;
		}

		.banner-right-div img {
			width: 50%;
		}

		.banner-right-div .card {
			margin-bottom: 70px;
			width: 80%;

		}

		.banner-right-div .card-body {
			display: flex;
			align-items: center;
		}

		.banner-right-div .card-body i {
			font-size: 24px;
			margin-right: 10px;
		}

		.navbar-brand h3 {
			margin-bottom: 0;
			/* Remove any default margin */
		}

		.navbar-brand p {
			margin-top: 10;
			/* Remove any default margin */
		}

		.card-animation {
			transition: transform 0.3s ease;
		}

		/* Add the hover effect */
		.card-animation:hover {
			transform: scale(1.1);
		}
	</style>

</head>

<body>
	<header class="navbar navbar-expand-lg navbar-light bg-light" style="height: 100px;">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="./images/logo.png" alt="">
				<h3>සමූපකාර සේවා සමිතිය </br>
					<p>cooperative society ltd kobeigane</p>
					</h1>


			</a>
		</div>
	</header>

	<div class="banner">
		<div class="banner-left-div">
			<img src="./images/cop_logo1.jpg" alt="Banner Image">

		</div>
		<div class="banner-right-div">
			<div class="card mb-5 card border-success" style="max-width: 640px;">
				<div class="row g-0">
					<div class="col-md-4">
						<img src="./images/maneger.png" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<a href="manegerlogin.php">

								<h3 style="font-weight: bold;">MANEGER</h3>

								<p class="card-text"><small class="text-body-secondary"></small></p>
						</div>
					</div>
				</div>
			</div>
			<div class="card mb-5 card border-primary" style="max-width: 540px;">
				<div class="row g-0">
					<div class="col-md-4">
						<img src="./images/office.png" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<button class="btn btn-primary">OFFICE</button>
							<p class="card-text"></p>
							<p class="card-text"><small class="text-body-secondary"></small></p>
						</div>
					</div>
				</div>
			</div>
			<div class="card mb-5 card border-danger" style="max-width: 540px;">
				<div class="row g-0">
					<div class="col-md-4">
						<img src="./images/store.png" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<button class="btn btn-primary">STORE</button>
							<p class="card-text"></p>
							<p class="card-text"><small class="text-body-secondary"></small></p>
						</div>
					</div>
				</div>
			</div>
			<div class="card mb-2 card border-warning" style="max-width: 640px;">
				<div class="row g-0">
					<div class="col-md-2">
						<img src="./images/suppermarkert.png" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">							   						    						
							<h4 style="font-weight: bold;"> <a href="supermarkert.php">SUPPER MARKET</h4>
							<p class="card-text"></p>
							<p class="card-text"><small class="text-body-secondary"></small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


</body>

</html>