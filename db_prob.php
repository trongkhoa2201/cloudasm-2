<?php
	include("config.php");
	$shop = $_GET["shop"];
?>
<html>
	<head>
		<meta charset="utf-8">
		<title> ATN Shop Page </title>
</head>
<h1> PAGE FOR SHOP B <h1/>
	</head>
	<body>
		<form action-"" method-"post>
	<input type="submit" name="sellButton"
			value="Input sell data"/> <br/><br/>
			
	<input type="submit" name="takeButton"
			value="Input intake data"/>
	</form>
	<?php
	
		if(isset($_POST['deleteButton']))
		{
			header("Location: delete1.php?shop=$shop");
		}
		if(isset($_POST['updateButton']))
		{
			header("Location: update1.php?shop=$shop");
		}
	?>
		<p> Data for Shop B <p/>
	<?php
	include("fetch_b.php");
	$pg_heroku = pg_connect($conn_string);
	$table = "productb";
	pg_close();
	?>
	</body>
</html>
