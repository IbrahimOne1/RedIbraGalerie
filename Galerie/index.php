<!DOCTYPE html>
<html>
<head>
	<title>Gallerie</title>
</head>
<body>
<div id="navbar">
	<a href="">index</a>
	<a href="">login</a>
	<a href="">sos tomate</a>
	<a href="">inscription</a>
</div>

<div id="sidebar">
	<div id="login">
		<form method="POST" action="index.php">
			<input type="text" name="username" placeholder="username" />
			<input type="password" name="password" placeholder="password" />
			<input type="submit" name="submit" value="Login">
		</form>
	</div>

	<ul>
		<li>nature</li>
		<li>football</li>
		<li>caraté</li>
		<li>lmazouzi</li>
	</ul>
</div>

<div id="container">

	<img src="1.jpg" id="img" />
	<img src="2.jpg" id="img" />
	<img src="3.jpg" id="img" />
	<img src="4.jpg" id="img" />
	<img src="5.jpg" id="img" />
	<img src="6.jpg" id="img" />
	<img src="2.jpg" id="img" />
	<img src="5.jpg" id="img" />


</div>
<style type="text/css">
	#navbar{
		position: fixed;
		top: 0px;
		left: 0px;
		width: 100%;
		height: 80px;
		background-color: #c0cbcd;
		padding: 2px;
		margin: auto;
		text-align: center;
		text-decoration: none;
		font-size: 22px;
		box-shadow: 0px 0px 8px #000;

	}
#navbar a{
 	font-family: sans-serif;
 	text-decoration: none;
 	color: #fff;
 	background-color: transparent;
 	padding-top: 30px;
 	padding-bottom: 55px;
 }
 #navbar a:hover{
 	font-family: sans-serif;
 	text-decoration: none;
 	color: #000;
 	background-color: #c07b6f;
 	padding-top: 30px;
 	padding-bottom: 55px;
 }

#sidebar{
	position: absolute;
	top: 150px;
	left: 2px;
	width: 300px;
	min-height: 100%;
	background-color: #c0cbcd;
	border: 1px solid transparent;
	box-shadow: 0px 0px 8px #000;
}

#container{
	position: absolute;
	left: 350px;
	top: 150px;
	width: 900px;
	background-color: #c0cbcd;
	padding: 5px;
	box-shadow: 0px 0px 8px #000;
}
#img{
width: 300px;
height: 300px;
display: inline-grid;

}
</style>

</body>
</html>
