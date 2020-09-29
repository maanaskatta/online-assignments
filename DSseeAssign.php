<?php
	$conn = mysqli_connect("localhost","root","","sriit");
	$sql = "select * from dsfiles";
	$result = mysqli_query($conn,$sql) or die("Bad Query: $sql");
	
?>




<!DOCTYPE html>
<html>
<head>
	<title>Assignments Page</title>
	<link rel="stylesheet" type="text/css" href="Assign.css">
</head>
<body>

	<div id="head" >

		<p id="heading">SRIIT Assignment Page</p>
		<a id="logout" href="index.html">LOGOUT</a>
		<a id="links" href="DSupload.php">UPLOAD</a>
		<a id="links" href="DSseeAssign.php">ASSIGNMENTS</a>
		
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