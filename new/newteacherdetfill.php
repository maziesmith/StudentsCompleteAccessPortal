<?php
	session_start();
	echo '<br>';
	if (isset($_POST['submit']))
	 {
		if(!$_POST['t_id'] || !$_POST['t_name'] || !$_POST['t_pwd'] || !$_POST['t_phone'] || !$_POST['t_mail'] || !$_POST['t_sub'] || !$_POST['t_des'])
		{
			echo '<script>alert("PLEASE FILL ALL DETAILS")</script>';
		}
		else{
					$flag=0;
					$t_id=$_POST['t_id'];
					$t_name=$_POST['t_name'];
					if (!preg_match("/^[a-zA-Z ]*$/",$t_name))
					{
  						echo '<script>alert("NAME SHOULD CONSIST OF ALPHABETS AND WHITE SPACE ONLY")</script>';
  						$flag=1;
					}
					$t_pwd=$_POST['t_pwd'];
					$t_phone=$_POST['t_phone'];
					if(!preg_match('/^\+?([0-9]{1,4})\)?[-. ]?([0-9]{10})$/', $t_phone) ) {
	 					echo '<script>alert("INVALID PHONE NO.")</script>';
	 					$flag=1;
	 				}
					$t_mail=$_POST['t_mail'];
					if (!filter_var($t_mail, FILTER_VALIDATE_EMAIL)) {
  						echo '<script>alert("INVALID EMAIL ID")</script>';
  						$flag=1;
					}
					$t_sub=$_POST['t_sub'];
					$t_des=$_POST['t_des'];
					if($flag == 0){
					@$con=mysql_connect('localhost', 'root', '');
					if($con) {
						$sel=mysql_select_db('SCAP');
						if($sel) {
							//echo "1";
							$query="INSERT INTO TeacherDet VALUES('".$t_id."','".$t_name."','".$t_pwd."',".$t_phone.",'".$t_mail."','".$t_sub."','".$t_des."')";
							//echo "2";
							if($res=mysql_query($query)) {
								$result="successful";
								echo '<script type="text/javascript">';
								echo 'alert("Your Username for the system will be '. $t_id.' ")';
								echo '</script>';  
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
					mysql_close();}
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
				require 'include/newteachernav.php';                     
				if(isset($result2)) 
				{                           
					echo $result2;
				}
				?>
			</div>
			<div>		
		
		<form method="POST" enctype="multipart/form-data" action="newteacherdetfill.php">
		<h1>Teacher Details Form :--</h1><br><br>	

		Note:
		Your TID will be Initials00Number FOR EXAMPLE:  Raj Verma will have RV0023<br>
		
			<br><input type="text" placeholder="TEACHER ID" name="t_id"><br>
			<input type="text" placeholder="FULL NAME" name="t_name"><br>
			<input type="text" placeholder="PASSWORD" name="t_pwd"><br>
			<input type="text" placeholder="CONTACT NO." name="t_phone"><br>
			<input type="text" placeholder="EMAIL ID" name="t_mail"><br>
			<input type="text" placeholder="SUBJECTS EXPERTISE" name="t_sub"><br>
			<input type="text" placeholder="TEACHER DESIGNATION" name="t_des"><br><br>
			<br><center><button type="submit" name="submit">SUBMIT</button></center>
		</form>
		</div>
		<?php
			if(isset($result)) {
				//echo $result;
			}
		?>
	</body>
</html>