<?php
session_start();
if(!file_exists("../data/user.xml")){
	header('Location: login.php');
	die;
}
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>Homepage</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			
			<div class="main">
				<h1 style="text-align:center;color:green;">International 5 star Movie Review</h1>
			</div>
			
			<nav class="navbar navbar-inverse  ">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.html">Home</a>
					</div>
					
					<ul class="nav navbar-nav">
						<li><a href="latest movie.html">Latest Movies</a></li>
					</ul>
					
					<div class="navbar-header">
						<a class="navbar-brand" href="reviews.php">Review a movie</a>
					</div>
					
					<form class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
				</div>
			</nav>

			<div id="site_content">

				<div class="slideshow">
					<ul class="slideshow">
						<li class="show"><img width="100%" height="300" src="/images/home_1.jpg" alt="&quot;Rent all the latest DVD&quot;" /></li>
					</ul>
				</div>
			</div>
			<div class="sidebar_container">
				<div class="sidebar">
					<div class="sidebar_item">
						<h2>Message</h2>
						<p>Welcome</p>
					</div>
				</div>
				<div class="sidebar">
					<div class="sidebar_item">
						<h2>Latest Release</h2>
						<p>December 2016</p>
					</div>
				</div>
				<div class="sidebar">
					<div class="sidebar_item">
						<h2>Contact</h2>
						<p>Phone: +353 872345678</p>
						<p>Email: <a href="719480573@qq.com">719480573@qq.com</a></a>
						</p>
					</div>
				</div>
			</div>

			<div id="content">
				<div class="content_item">
					<h1>Welcome To Our Website</h1>




					<section>
						<div>
							<div class="img">
								<a target="_blank"><img src="/images/2.jpg" alt="Movies" width="300" height="300"></a>
								<div class="desc"><b>Elysium</b></div>
								<!--//source: http://www.w3schools.com/ajax/tryit.asp?filename=tryajax_first-->

								<body>
									<div id="demo"></div>

									<button type="button" onclick="loadXMLDoc()">View Details</button>

									<script>
										function loadXMLDoc() {
											var xhttp = new XMLHttpRequest();
											xhttp.onreadystatechange = function() {
												if (xhttp.readyState == 4 && xhttp.status == 200) {
													document.getElementById("demo").innerHTML = xhttp.responseText;
												}
											};
											xhttp.open("GET", "details1.xml", true);
											xhttp.send();
										}
									</script>
								</body>

							</div>



							<div class="img">
								<a target="_blank"><img src="/images/3.jpg" alt="Movies" width="300" height="300" href="https://www.youtube.com/watch?v=Aojd0pE_MJ8"></a>
								<div class="desc"><b>Snitch</b></div>

								<body>
									<div id="demo1"></div>

									<button type="button" onclick="loadXMLDoc1()">View Details</button>

									<script>
										function loadXMLDoc1() {
											var xhttp = new XMLHttpRequest();
											xhttp.onreadystatechange = function() {
												if (xhttp.readyState == 4 && xhttp.status == 200) {
													document.getElementById("demo1").innerHTML = xhttp.responseText;
												}
											};
											xhttp.open("GET", "details2.xml", true);
											xhttp.send();
										}
									</script>
								</body>
							</div>
						</div>
						<div class="img">
							<a target="_blank"><img src="/images/4.jpg" alt="Movies" width="300" height="300"></a>
							<div class="desc"><b>FAST AND FURIOUS 6</b></div>

							<body>
								<div id="demo2"></div>

								<button type="button" onclick="loadXMLDoc2()">View Details</button>

								<script>
									function loadXMLDoc2() {
										var xhttp = new XMLHttpRequest();
										xhttp.onreadystatechange = function() {
											if (xhttp.readyState == 4 && xhttp.status == 200) {
												document.getElementById("demo2").innerHTML = xhttp.responseText;
											}
										};
										xhttp.open("GET", "details3.xml", true);
										xhttp.send();
									}
								</script>
							</body>
						</div>
						<div class="img">
							<a target="_blank"><img src="/images/PiratesOfCaribbean.jpg" alt="Movies" width="300" height="300"></a>
							<div class="desc"><b>Pirates Of Caribbean</b></div>

							<body>
								<div id="demo3"></div>

								<button type="button" onclick="loadXMLDoc3()">View Details</button>

								<script>
									function loadXMLDoc3() {
										var xhttp = new XMLHttpRequest();
										xhttp.onreadystatechange = function() {
											if (xhttp.readyState == 4 && xhttp.status == 200) {
												document.getElementById("demo3").innerHTML = xhttp.responseText;
											}
										};
										xhttp.open("GET", "details4.xml", true);
										xhttp.send();
									}
								</script>
							</body>

						</div>

					</section>

				</div>
			</div>
		</div>

		</div>
		<hr />
		<a href="changepassword.php">Change Password</a>
		<a href="logout.php">Logout</a>
	</body>

	</html>