<?php
	session_start();
	echo '<br>';
	$h=$_SESSION['stype'];
	
	if (isset($_POST['submit']))
	 {
		if(!$_POST['studname'] || !$_POST['s_pwd'] || !$_POST['s_class'] ||!$_POST['sphoneno'] || !$_POST['scaddress'] || !$_POST['spaddress'] || !$_POST['sage'] || !$_POST['sdob'] || !$_POST['semail'] || !$_POST['sgender'])
		{
			echo '<script>alert("PLEASE ENSURE ALL DETAILS ARE FILLED")</script>';
		}
		else{
						$studid=$h;
						$studname=$_POST['studname'];
						$s_pwd=$_POST['s_pwd'];
						$s_class=$_POST['s_class'];
						$sphoneno=$_POST['sphoneno'];
						$scaddress=$_POST['scaddress'];
						$spaddress=$_POST['spaddress'];
						$sage=$_POST['sage'];
						$sdob=$_POST['sdob'];
						$semail=$_POST['semail'];
						$sgender=$_POST['sgender'];
						//$flag=0;
								//block to upload an image
								$target_dir = '../new/uploads';
								$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
								$tmp_name=$_FILES["fileToUpload"]["tmp_name"];
								$name=$_FILES["fileToUpload"]["name"];
								move_uploaded_file($tmp_name,"$target_dir/$name");
								$savlocation="../new/uploads/".$name;
								//$flag=1;
								//echo $savlocation;
								//block ends
						@$con=mysql_connect('localhost', 'root', '');
						if($con) {
							$sel=mysql_select_db('SCAP');
							if($sel) {
								if($savlocation=="../new/uploads/"){
								$query="UPDATE StudentDet SET s_name='".$studname."',s_pwd='".$s_pwd."',s_class='".$s_class."',s_phone=".$sphoneno.",s_caddress='".$scaddress."',s_paddress='".$spaddress."',s_age=".$sage.",s_dob='".$sdob."',s_email='".$semail."',s_gender='".$sgender."' WHERE s_id='".$studid."'";
								}
								else{
								$query="UPDATE StudentDet SET s_name='".$studname."',s_pwd='".$s_pwd."',s_class='".$s_class."',s_phone=".$sphoneno.",s_caddress='".$scaddress."',s_paddress='".$spaddress."',s_age=".$sage.",s_dob='".$sdob."',s_email='".$semail."',s_gender='".$sgender."',s_dp='".$savlocation."' WHERE s_id='".$studid."'";
								}

								if($res=mysql_query($query)) {
									$result="successful";
									echo $savlocation;
									echo '<script>alert("DETAILS UPDATED")</script>';
								}
								else {
									$result="not successful";
								}
							} else {
								//echo "string";
							}
						} else{
							echo "Database connection error";
						}
						mysql_close();
			}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>STUDENTS FORM</title>
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
				if(isset($result2)) 
				{                           
					echo $result2;
				}
				?>
			</div>
			
		<div>		
		
		<form method="POST" enctype="multipart/form-data" action="studentdetfill.php">
		<h1>Student Details Form :--</h1><br><br>
		<?php
			@$con=mysql_connect('localhost', 'root', '');
			if($con) 
			{
				$sel=mysql_select_db('SCAP');
				if($sel) 
				{
					$query="select * from StudentDet where s_id='$h'";
					if($result=mysql_query($query))
					{
							$row=mysql_fetch_assoc($result);
								$stuid=$row['s_id'];
								$stuname=$row['s_name'];                                         
								$stuclass=$row['s_class'];
								$stuphone=$row['s_phone'];
								$stuadd=$row['s_caddress'];
								$stupadd=$row['s_paddress'];
								$sage=$row['s_age'];
								$sdob=$row['s_dob'];
								$stuemail=$row['s_email'];
								$sgender=$row['s_gender'];
								$sdp=$row['s_dp'];
					}else{echo "query problem";}
				}else {echo "scap doesnt exist";}
			}
		
			echo '<img src="'.$sdp.'" height="120" width="120">';
			echo '<br><br>';
			?>
			<p><input type="text" placeholder="STUDENT ID" name="studid" value="<?php echo htmlspecialchars($h); ?>" disabled></p>
			<p><input type="text" placeholder="FULL NAME" name="studname" value="<?php echo htmlspecialchars($stuname); ?>"></p>
			<p><input type="text" placeholder="PASSWORD" name="s_pwd"></p>
			<p><input type="text" placeholder="CLASS" name="s_class" value="<?php echo htmlspecialchars($stuclass); ?>"></p>
			<p><input type="text" placeholder="CONTACT NO." name="sphoneno" value="<?php echo htmlspecialchars($stuphone); ?>"></p>
			<p><input type="text" placeholder="CURRENT ADDRESS" name="scaddress" value="<?php echo htmlspecialchars($stuadd); ?>"></p>
			<p><input type="text" placeholder="PERMANENT ADDRESS" name="spaddress" value="<?php echo htmlspecialchars($stupadd); ?>"></p>
			<p><input type="text" placeholder="AGE" name="sage"  value="<?php echo htmlspecialchars($sage); ?>"></p>
			<p><input type="text" placeholder="DATE OF BIRTH" name="sdob" value="<?php echo htmlspecialchars($sdob); ?>"></p>
			<p><input type="text" placeholder="EMAIL ID" name="semail" value="<?php echo htmlspecialchars($stuemail); ?>"></p>
			<p><input type="text" placeholder="GENDER" name="sgender" value="<?php echo htmlspecialchars($sgender); ?>"></p>
			<p><h3>Update Profile Pic:</h3><br><br><div class="upload"><input type="file" name="fileToUpload" id="fileToUpload"></p></div>
			<br><br>
			<center><button type="submit" name="submit">UPDATE</button></center>
		</form>
		<br>
		</div>
		<?php
			if(isset($result)) {
				//echo $result;
			}
		?>
	</body>
</html>