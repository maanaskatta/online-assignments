<?php
?>


<!DOCTYPE html>
<html>
<head>
	<title>Professor Page</title>
	<link rel="stylesheet" type="text/css" href="Teach.css">
</head>	
<body>



	
	<div id="head" >

		<p id="heading">CD Assignment Page</p>
		<a id="logout" href="index.html">LOGOUT</a>
		<a id="links" href="CDupload.php">UPLOAD</a>
		<a id="links" href="CDseeAssign.php">ASSIGNMENTS</a>
	</div>
		

	<div id="upload">
		
		<form method="POST" enctype="multipart/form-data" action="CDstorefile.php" >
			
			<label id="label">Assignment Date</label>
			<input id="box" type="Date" name="assigndate" placeholder="DD/MM/YYYY">

			<br>

			<label id="label">Submission Date</label>
			<input id="box" type="Date" data-date="" data-date-format="DD MMMM YYYY" name="submitdate" placeholder="DD/MM/YYYY">

			<br>

			<label id="label">Upload File</label>
			<input id="file"  type="file" name="file">

			<br>

			<input id="submit" type="submit" name="submit" value="UPLOAD"> 

		</form>

	</div>

	<style type="text/css">
		
		#links:hover{
		background: black;
		color: white;
		}

		#label{
		position: relative;
		color: black;
		font-family: "Segoe UI";
		font-size: 20px;
		font-weight: bold;
		color: black;
		
	}


	</style>


</body>
</html>

