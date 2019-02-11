<?php
	session_start();
	echo '<br>';
	$h=$_SESSION['ttype'];
	if (isset($_POST['submit']))
	 {
		if(!$_POST['t_name'] || !$_POST['t_pwd'] || !$_POST['t_phone'] || !$_POST['t_mail'] || !$_POST['t_sub'] || !$_POST['t_des'])
		{
			echo '<script>alert("PLEASE ENSURE ALL DETAILS ARE FILLED")</script>';
		}
		else
		{
			$t_id=$h;
			$t_name=$_POST['t_name'];
			$t_pwd=$_POST['t_pwd'];
			$t_phone=$_POST['t_phone'];
			$t_mail=$_POST['t_mail'];
			$t_sub=$_POST['t_sub'];
			$t_des=$_POST['t_des'];
			@$con=mysql_connect('localhost', 'root', '');
			if($con)
			{
				$sel=mysql_select_db('SCAP');
				if($sel) {
					//echo "1";
					#$query="INSERT INTO TeacherDet VALUES('".$t_id."','".$t_name."','".$t_pwd."',".$t_phone.",'".$t_mail."','".$t_sub."','".$t_des."')";
					$query="UPDATE TeacherDet SET t_name='".$t_name."',t_pwd='".$t_pwd."',t_phone=".$t_phone.",t_mail='".$t_mail."',t_sub='".$t_sub."',t_des='".$t_des."' WHERE t_id='".$t_id."'";
					//echo "2";
					if($res=mysql_query($query)) {
						$result="successful";
						echo '<script>alert("DETAILS UPDATED")</script>';
					}
					else {
						$result="not successful";
					}
				} else {
					echo "string";
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
		<title>TEACHERS FORM</title>
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
				require 'include/teachernav.php';                     
				if(isset($result2)) 
				{                           
					echo $result2;
				}
			?>
		</div>
		<div>		
		<form method="POST" action="teacherdetfill.php"><br><h1>Teacher Details Form :--</h1><br><br>
		
		<?php
			@$con=mysql_connect('localhost', 'root', '');
			if($con) 
			{
				$sel=mysql_select_db('SCAP');
				if($sel) 
				{
					$query="select * from TeacherDet where t_id='$h'";
					if($result=mysql_query($query))
					{
						//echo "successful";
						echo '<br>';
						for($i=0; $row=mysql_fetch_assoc($result); $i++)
						{
							$tname=$row['t_name'];                                         
							$tphone=$row['t_phone'];
							$temail=$row['t_mail'];
							$tsubject=$row['t_sub'];
							$tdesg=$row['t_des'];								
						}
					}else{echo "query problem";}
				}else {echo "scap doesnt exist";}
			}
		?>
			<input type="text" placeholder="TEACHER ID" name="t_id" value="<?php echo htmlspecialchars($h); ?>" disabled><br>
			<input type="text" placeholder="FULL NAME" name="t_name" value="<?php echo htmlspecialchars($tname); ?>"><br>
			<input type="text" placeholder="PASSWORD" name="t_pwd"><br>
			<input type="text" placeholder="CONTACT NO." name="t_phone" value="<?php echo htmlspecialchars($tphone); ?>"><br>
			<input type="text" placeholder="EMAIL ID" name="t_mail" value="<?php echo htmlspecialchars($temail); ?>"><br>
			<input type="text" placeholder="SUBJECTS EXPERTISE" name="t_sub" value="<?php echo htmlspecialchars($tsubject); ?>"><br>
			<input type="text" placeholder="TEACHER DESIGNATION" name="t_des" value="<?php echo htmlspecialchars($tdesg); ?>"><br><br>
			<br><center><button type="submit" name="submit">UPDATE</button></center>
		</form>
		</div>
		<?php
			if(isset($result)) {
				//echo $result;
			}
		?>
	</body>
</html>