<?php
session_start();
echo '<br>';
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
				require 'include/newstudentnav.php';                     
				if(isset($result2)) 
				{                           
					echo $result2;
				}
				?>
			</div>
		<div>		
		
		<form method="POST" enctype="multipart/form-data" action="newstudentdetfill.php">
		<h1>Student Details Form :--</h1><br><br>	
		
			<p><input type="radio" name="year" value="FE">&nbsp;&nbsp;&nbsp;&nbsp;F.E&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="year" value="SE">&nbsp;&nbsp;&nbsp;&nbsp;S.E&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="year" value="TE">&nbsp;&nbsp;&nbsp;&nbsp;T.E&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="year" value="BE">&nbsp;&nbsp;&nbsp;&nbsp;B.E</p>
			<p><input type="text" placeholder="ROLL NO" name="sturoll"></p>
			<p><input type="text" placeholder="FULL NAME" name="studname"></p>
			<div class="upload"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="fileToUpload" id="fileToUpload"></p></div>
			<p><input type="text" placeholder="PASSWORD" name="s_pwd"></p>
			<p><input type="text" placeholder="CLASS" name="s_class"></p>
			<p><input type="text" placeholder="CONTACT NO. 10 digit" name="sphoneno"></p>
			<p><textarea rows="7" cols="40" placeholder="CURRENT ADDRESS" name="scaddress"></textarea></p>
			<p><textarea rows="7" cols="40" placeholder="PERMANENT ADDRESS" name="spaddress"></textarea></p>
			<p><input type="text" placeholder="AGE" name="sage"></p>
			<p><input type="text" placeholder="DATE OF BIRTH(YYYY-MM-DD)" name="sdob"></p>
			<p><input type="text" placeholder="EMAIL ID" name="semail"></p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="male">&nbsp;&nbsp;&nbsp;&nbsp;Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="sex" value="female">&nbsp;&nbsp;&nbsp;&nbsp;Female</p><br><br>
			<center><button type="submit" name="next">NEXT</button></center>
		</form>
		<br>
		</div>
		<?php
	@session_start();
	if (isset($_POST['next']))
	{
		if(!$_POST['year'] || !$_POST['sturoll'] || !$_POST['studname'] || !$_POST['s_class'] || !$_POST['s_pwd'] || !$_POST['sphoneno'] || !$_POST['scaddress'] || !$_POST['spaddress'] || !$_POST['sage'] || !$_POST['sdob'] || !$_POST['semail'] || !$_POST['sex'])
		{
			echo '<script>alert("PLEASE FILL ALL DETAILS")</script>';
		}
		else{
				$flag=0;
				$stuyear=$_POST['year'];
				$sturoll=$_POST['sturoll'];
				if($stuyear=="FE")
					{ $stu="F00";}
				if($stuyear=="SE")
					{ $stu="S00";}
				if($stuyear=="TE")
					{ $stu="T00";}
				if($stuyear=="BE")
					{ $stu="B00";}
				$studid=$stu.$sturoll;
				//block to upload an image
				$target_dir = 'uploads';
				$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
				$tmp_name=$_FILES["fileToUpload"]["tmp_name"];
				$name=$_FILES["fileToUpload"]["name"];
				move_uploaded_file($tmp_name,"$target_dir/$name");
				$savlocation="../new/uploads/".$name;
				//echo $savlocation;
				//block ends
				$_SESSION['newtype']=$studid;
				$studname=$_POST['studname'];
				if (!preg_match("/^[a-zA-Z ]*$/",$studname))
				{
  					echo '<script>alert("NAME SHOULD CONSIST OF ALPHABETS AND WHITE SPACE ONLY")</script>';
  					$flag=1;
				}
				$s_pwd=$_POST['s_pwd'];
				$s_class=$_POST['s_class'];
				$sphoneno=$_POST['sphoneno'];
				if(!preg_match('/^([0-9]{10})$/', $sphoneno) ) {
 					echo '<script>alert("INVALID PHONE NO.")</script>';
 					$flag=1;
 				}
				$scaddress=$_POST['scaddress'];
				$spaddress=$_POST['spaddress'];
				$sage=$_POST['sage'];
				if(!is_numeric($sage))
				{
					echo '<script>alert("AGE CANNOT BE NON NUMERIC")</script>';
					$flag=1;
				}
				$sdob=$_POST['sdob'];
				if (!preg_match('/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/',$sdob))
    			{
        			echo '<script>alert("INVALID DATE FORMAT.PLEASE ENTER DATE IN YYYY-MM-DD FORMAT")</script>';
        			$flag=1;
    			}
				$semail=$_POST['semail'];
				if (!filter_var($semail, FILTER_VALIDATE_EMAIL)) {
  					echo '<script>alert("INVALID EMAIL ID")</script>';
  					$flag=1;
				}
				$sex=$_POST['sex'];
				if($flag==0)
				{
				@$con=mysql_connect('localhost', 'root', '');
				if($con) {
					$sel=mysql_select_db('SCAP');
					if($sel) {
						
						$query="INSERT INTO StudentDet VALUES('".$studid."','".$studname."','".$s_pwd."','".$s_class."',".$sphoneno.",'".$scaddress."','".$spaddress."',".$sage.",'".$sdob."','".$semail."','".$sex."','".$savlocation."')";
						
						if($res=mysql_query($query)) {
							//$result="successful";
							echo '<script type="text/javascript">
							<!--
							alert("Your Username for the system will be '. $studid.' ")
							window.location = "newacademicdetfill.php"
							//-->
							</script>';
					
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
		
	}
?>
	</body>
</html>