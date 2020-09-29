<?php
	$conn = mysqli_connect("localhost","root","","sriit");
	$sql = "select * from ooadfiles";
	$result = mysqli_query($conn,$sql) or die("Bad Query: $sql");
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>DS Assignment Page</title>
	<link rel="stylesheet" type="text/css" href="StudentPage.css">
</head>
<body>

	<div id="head" >

		<p id="heading">SRIIT Assignment Page</p>
		<a id="logout" href="index.html">LOGOUT</a>
		<a id="links" href="DSassign.php">DS</a>
		<a id="links" href="WTassign.php">WT</a>
		<a id="links" href="OOADassign.php">OOAD</a>
		<a id="links" href="PPLassign.php">PPL</a>
		<a id="links" href="ISassign.php">IS</a>
		<a id="links" href="CDassign.php">CD</a>
	</div>

	<div style="position: absolute;left: 0px;top: 20%;height: 100%;width: 100%;overflow-y: scroll;background: whitesmoke;">

		<hr id="line" width="80%">

		<table align="center"  style="width: 80%;line-height: 40px;height: 10px;">
			<tr id="cols">
				<th>S-No</th>
				<th>Files</th>
				<th>Assignment-Date</th>
				<th>Submission-Date</th>
				<th>Download</th>
			</tr>
			

			<?php
				while ($rows=mysqli_fetch_assoc($result)) 
				{
					$foil = "uploads/".$rows['filename'];
			?>
					<tr id="row">
						<td align="center"><?php echo $rows['id'];?></td>
						<td align="center"><?php echo $rows['filename'];?></td>
						<td align="center"><?php echo $rows['assigndate']; ?></td>
						<td align="center"><?php echo $rows['subdate']; ?></td>
						<td align="center"><a id="download" download="<?php echo $foil ?>" href="<?php echo $foil ?>">Download</a></td>
					</tr>
			<?php						
				}
			?>

			
		</table>		
	</div>

	

</body>
</html>

<style type="text/css">
	body{

	background: #f3f3f3 ;
}

#head{
	position: absolute;
	top: 0px;
	left: 0px;
	height: 19%;
	width: 100%;
	background-image: linear-gradient(to right,red,yellow);
}


#heading{
	position: relative;
	top: -20px;
	text-align: center;
	font-size: 39px;
	font-family: "Codec";
	color: black;

}

#logout{

	position: absolute;
	top: 35%;
	left: 92%;
	text-decoration: none;
	background: white;
	padding:5px;
	color: black;
	border-radius: 7%;
	border:1px solid white ;
	box-shadow: 0px 0px 10px;
	font-weight: bold;

}

#logout:hover{

	background: black;
	color: white;
}

#links{
	position: relative;
	bottom: 25%;
	left: 0px;
	background: white;
	text-decoration: none;
	color: black;
	margin-left: 95px;
	padding:5px 30px;
	border-radius: 5px;
	border:1px solid white;
	box-shadow: 0px 0px 10px;
	font-family: "Segoe UI";
	font-weight: bold;
	background: white;
	color: black;
}

#links:hover{

	background: black;
	color: white;
}
</style>