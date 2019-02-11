<?php
	session_start();
	echo '<br>';
	$h=$_SESSION['stype'];
	
	if (isset($_POST['submit']))
	 {
		if(!$_POST['sphoneno'] || !$_POST['semester'] || !$_POST['semail'])
		{
			echo '<script>alert("PLEASE ENSURE ALL DETAILS ARE FILLED")</script>';
			goto KHATAM;
		}
		$noofsem=$_POST['semester'];
								//block to upload an image
								$target_dir = '../student/uploads';
								$target_file = $target_dir.basename($_FILES["fileToUpload1"]["name"]);
								$tmp_name=$_FILES["fileToUpload1"]["tmp_name"];
								$name=$_FILES["fileToUpload1"]["name"];
								move_uploaded_file($tmp_name,"$target_dir/$name");
								$savlocation1="../student/uploads/".$name;
								//block ends
								//block to upload an image
								$target_dir = '../student/uploads';
								$target_file = $target_dir.basename($_FILES["fileToUpload2"]["name"]);
								$tmp_name=$_FILES["fileToUpload2"]["tmp_name"];
								$name=$_FILES["fileToUpload2"]["name"];
								move_uploaded_file($tmp_name,"$target_dir/$name");
								$savlocation2="../student/uploads/".$name;
								//block ends
								//block to upload an image
								$target_dir = '../student/uploads';
								$target_file = $target_dir.basename($_FILES["fileToUpload3"]["name"]);
								$tmp_name=$_FILES["fileToUpload3"]["tmp_name"];
								$name=$_FILES["fileToUpload3"]["name"];
								move_uploaded_file($tmp_name,"$target_dir/$name");
								$savlocation3="../student/uploads/".$name;
								//block ends
								//block to upload an image
								$target_dir = '../student/uploads';
								$target_file = $target_dir.basename($_FILES["fileToUpload4"]["name"]);
								$tmp_name=$_FILES["fileToUpload4"]["tmp_name"];
								$name=$_FILES["fileToUpload4"]["name"];
								move_uploaded_file($tmp_name,"$target_dir/$name");
								$savlocation4="../student/uploads/".$name;
								//block ends
								//block to upload an image
								$target_dir = '../student/uploads';
								$target_file = $target_dir.basename($_FILES["fileToUpload5"]["name"]);
								$tmp_name=$_FILES["fileToUpload5"]["tmp_name"];
								$name=$_FILES["fileToUpload5"]["name"];
								move_uploaded_file($tmp_name,"$target_dir/$name");
								$savlocation5="../student/uploads/".$name;
								//block ends
								//block to upload an image
								$target_dir = '../student/uploads';
								$target_file = $target_dir.basename($_FILES["fileToUpload6"]["name"]);
								$tmp_name=$_FILES["fileToUpload6"]["tmp_name"];
								$name=$_FILES["fileToUpload6"]["name"];
								move_uploaded_file($tmp_name,"$target_dir/$name");
								$savlocation6="../student/uploads/".$name;
								//block ends
								//block to upload an image
								$target_dir = '../student/uploads';
								$target_file = $target_dir.basename($_FILES["fileToUpload7"]["name"]);
								$tmp_name=$_FILES["fileToUpload7"]["tmp_name"];
								$name=$_FILES["fileToUpload7"]["name"];
								move_uploaded_file($tmp_name,"$target_dir/$name");
								$savlocation7="../student/uploads/".$name;
								//block ends
								//block to upload an image
								$target_dir = '../student/uploads';
								$target_file = $target_dir.basename($_FILES["fileToUpload8"]["name"]);
								$tmp_name=$_FILES["fileToUpload8"]["tmp_name"];
								$name=$_FILES["fileToUpload8"]["name"];
								move_uploaded_file($tmp_name,"$target_dir/$name");
								$savlocation8="../student/uploads/".$name;
								//block ends
								$studid=$h;
								$sphoneno=$_POST['sphoneno'];
								$semester=$_POST['semester'];
								$semail=$_POST['semail'];
								$reqst="Awaiting";
						@$con=mysql_connect('localhost', 'root', '');
						if($con) 
						{
							$sel=mysql_select_db('SCAP');
							if($sel) 
							{
								//CORRECT DIS TO ENTER CRRCT DETAILS INCLUDING REQ FEILD
$query="INSERT INTO transcriptdet VALUES('".$studid."','".$sphoneno."','".$semester."','".$semail."','".$savlocation1."','".$savlocation2."','".$savlocation3."','".$savlocation4."','".$savlocation5."','".$savlocation6."','".$savlocation7."','".$savlocation8."','".$reqst."')";

								if($res=mysql_query($query))
								{
									

									$result="successful";
									//echo $savlocation;
									echo '<script>alert("Transcript requested,you will recieve a reply in 3 days")</script>';
								}
								
							} 
						}
				mysql_close();
				KHATAM:{}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>TRANSCRIPT FORM</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body><div id="container">
    <header>
	<div class="width">
    		<h1><a href="/">TSEC'S<span>SCAP</span></a></h1>
        	<h2>All thing's managed</h2>
	</div>
    </header>
			<div id="menu">
			<?php
				require 'include/studentnav.php';                     
				if(isset($resultm)) 
				{                           
					echo $resultm;
				}
				?>
			</div>
			
		<div>		
		
		<form method="POST" enctype="multipart/form-data" action="reqtranscript.php" enctype="multipart/form-data">
		<h1>Student Details Form for Transcript :--</h1><br><br>
			<p><input type="text" placeholder="STUDENT ID" name="studid" value="<?php echo htmlspecialchars($h); ?>" disabled></p>
			<p><input type="text" placeholder="CONTACT NO." name="sphoneno"></p>
			<p><input type="text" placeholder="CURRENT SEMESTER" name="semester"></p>
			<p><input type="text" placeholder="EMAIL ID" name="semail"></p>
			<p><h3>Upload available marksheets:<br><br></h3><h4>
			<div class="upload">
				<p>Sem 1:<input type="file" name="fileToUpload1" id="fileToUpload"></p>
				<p>Sem 2:<input type="file" name="fileToUpload2" id="fileToUpload"></p>
				<p>Sem 3:<input type="file" name="fileToUpload3" id="fileToUpload"></p>
				<p>Sem 4:<input type="file" name="fileToUpload4" id="fileToUpload"></p>
				<p>Sem 5:<input type="file" name="fileToUpload5" id="fileToUpload"></p>
				<p>Sem 6:<input type="file" name="fileToUpload6" id="fileToUpload"></p>
				<p>Sem 7:<input type="file" name="fileToUpload7" id="fileToUpload"></p>
				<p>Sem 8:<input type="file" name="fileToUpload8" id="fileToUpload"></p>
			</div>
			</h4>
			<br><br>
			<center><button type="submit" name="submit">REQUEST</button></center>
		</form>
		<br>
		</div>
	</body>
</html>