<?php
session_start();

require '../secciones/admin/header.php';

?>
<style>
	/* Make the image fully responsive */
	.carousel-inner img {
		width: 70%;
		height: 50%;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 border cont-from" style="background: #0B614B;">

				<div id="demo" class="carousel slide" data-ride="carousel">
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
						<li data-target="#demo" data-slide-to="2"></li>
					</ul>
					<div class="carousel-inner" align="center">
						<div class="carousel-item active">
							<img src="../utilidades/binario.png" alt="Los Angeles" width="600" height="500">
							<div class="carousel-caption" style="color:#151515;">
								<h3>Los Angeles</h3>
								<p>We had such a great time in LA!</p>
							</div>   
						</div>
						<div class="carousel-item">
							<img src="../utilidades/boole.png" alt="Chicago" width="600" height="500">
							<div class="carousel-caption" style="color:#151515;">
								<h3>Chicago</h3>
								<p>Thank you, Chicago!</p>
							</div>   
						</div>
						<div class="carousel-item">
							<img src="../utilidades/boole.png" alt="New York" width="600" height="500">
							<div class="carousel-caption" style="color:#151515;">
								<h3>New York</h3>
								<p>We love the Big Apple!</p>
							</div>   
						</div>
					</div>
					<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</div>
		</div>
	</body>
	</html>


	<?php require '../secciones/admin/footer.php'; ?>