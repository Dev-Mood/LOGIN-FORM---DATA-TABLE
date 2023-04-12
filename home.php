<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Christian Lira">
	<title>PROJECT CHRISTIAN</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
ul {
  	list-style-type: none;
  	margin: 0;
  	padding: 0;
  	overflow: hidden;
  	background-color: #333;
}

li {
  	float: left;
}

li.menu-icon {
  	display: inline-block;
  	margin-right: 20px;
}

li a {
  	display: block;
  	color: white;
  	text-align: center;
 	padding: 14px 12px;
  	text-decoration: none;
  	margin-left: 30px;

}

li a:hover:not(.active) {
  	background-color: dodgerblue;
  	border-radius: 15px;

}

.card {
	width: 300px;
	height: 200px;
	background-color: transparent;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	padding: 20px;
	margin: 15px auto;
	border-radius: 5px;
	text-align: center;
	margin-top: 230px;
}
.card img {
	width: 80px;
	height: 80px;
	border-radius: 50%;
	object-fit: cover;
	margin: 0 auto 20px;
	display: block;
}
.card h2 {
	margin: 0;
	font-size: 24px;
	font-family: Verdana;
	color: white;
	margin-right: 10px;
	text-shadow: 3px 3px 3px black;
}
.card small {
	margin: 10px 0 0;
	font-size: 14px;
	color: white;
	text-shadow: 10px 10px 10px black;

}

body {
	background-image: url('bg1.png');
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-size: 500px;
	background-color: black;
	background-position: center;
	margin-left: 16px; 
}

</style>
</head>
<body>

<ul>
  <li class="menu-icon"><i class="fa fa-bars" aria-hidden="true" style="color: white; position: absolute; margin-top: 13px; margin-left: 12px;"></i></li>
  <li><a href="#">Home</a></li>
  <li><a href="#">Contact</a></li>
  <li><a href="#">About us</a></li>
</ul>
<div class="card">
		<img src="profile.jpg" alt="Profile picture">
		<h2>Marc Christian Lira</h2>
		<small>Student No: 2021-4081</small><br>
		<small>Pateros Technological College</small><br>
		<small>Computer Science</small><br>
		
	</div>


</body>
</html>
