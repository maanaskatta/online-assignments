<?php
	
	$user = 'root';
	$pass = '';
	$dbname = 'sriit';

	$conn = mysqli_connect('localhost',"root",'',"sriit") or die("Database not connected!");

	if (isset($_POST['submit'])) 
	{
		if ((empty($_POST['assigndate'])) || (empty($_POST['submitdate']))) 
		{
			?>
			<script type="text/javascript">
				alert("Invalid Assignment or Submission Dates");
				window.location.assign("WTupload.php");
			</script>
			<?php
		}
		else if ((empty($_FILES['file']))) {
			
			?>
			<script type="text/javascript">
				alert("Select a file to upload!");
				window.location.assign("WTupload.php");
			</script>
			<?php
		}
		else
		{	
			$fname = $_FILES['file']['name'];
			$destination = 'uploads/'.$fname;
			$f_ile = $_FILES['file']['tmp_name'];

			$adate = $_POST['assigndate'];
			$sdate = $_POST['submitdate'];
			$up_file = addslashes($_FILES['file']['tmp_name']);
			$file_name = addslashes($_FILES['file']['name']);
			$up_file=file_get_contents($up_file);
			$up_file=base64_encode($up_file);

			if(move_uploaded_file($f_ile, $destination))
			{
				$stmt="INSERT INTO wtfiles(file,filename,assigndate,subdate)VALUES('$up_file','$file_name','$adate','$sdate') ";

				if(mysqli_query($conn,$stmt))
				{
					?>
					<script type="text/javascript">
					alert("Uploaded Successfully");
					window.location.assign("WTupload.php");
					</script>
					<?php
				}
				else{

					?>
					<script type="text/javascript">
						alert("Failed to Upload to Database");
						alert("File or Filename already exists!");
						window.location.assign("WTupload.php");
					</script>
					<?php
				}

			}
			else{
				?>
				<script type="text/javascript">
					alert("Failed to move file into server or Please select a file!");
					window.location.assign("WTupload.php");
				</script>
				<?php
			}	
		}
	}	
?>


