<?php
	session_start();
	echo '<br>';
	$h=$_SESSION['atype'];
	if (isset($_POST['submit']))
	 {
		if(!$_POST['a_name'] || !$_POST['a_pwd'] || !$_POST['a_phone'] || !$_POST['a_email'])
		{
			echo '<script>alert("PLEASE FILL ALL DETAILS")</script>';
		}
		else{
			$a_id=$h;
			$a_name=$_POST['a_name'];
			$a_pwd=$_POST['a_pwd'];
			$a_phone=$_POST['a_phone'];
			$a_email=$_POST['a_email'];
			@$con=mysql_connect('localhost', 'root', '');
			if($con) {
				$sel=mysql_select_db('SCAP');
				if($sel) {
					//echo "1";
					#$query="INSERT INTO AdminDet VALUES('".$a_id."','".$a_name."','".$a_pwd."',".$a_phone.",'".$a_email."')";
					$query="UPDATE AdminDet SET a_name='".$a_name."',a_pwd='".$a_pwd."',a_phone=".$a_phone.",a_email='".$a_email."' WHERE a_id='".$a_id."'";
					//echo "2";
					if($res=mysql_query($query)) {
						$result="successful";
						echo '<script>alert("PROFILE UPDATED")</script>';
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
		<title>ADMIN'S FORM</title>
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
			require 'include/adminnav.php';                     
			if(isset($resultm)) 
			{                           
				echo $resultm;
			}
			?>
		</div>	
		
		<div>		
		
		<form method="POST" action="admindetfill.php"><br><h1>Admin Details Form :--</h1><br><br>
		<?php
			@$con=mysql_connect('localhost', 'root', '');
			if($con) 
			{
				$sel=mysql_select_db('SCAP');
				if($sel) 
				{
					$query="select * from AdminDet where a_id='$h'";
					if($result=mysql_query($query))
					{
						//echo "successful";
						echo '<br>';
						for($i=0; $row=mysql_fetch_assoc($result); $i++)
						{
							$aname=$row['a_name'];                                         
							$aphone=$row['a_phone'];
							$aemail=$row['a_email'];
						}
					}else{echo "query problem";}
				}else {echo "scap doesnt exist";}
			}
		?>
			<p><input type="text" placeholder="ADMIN ID" name="a_id" value="<?php echo htmlspecialchars($h); ?>" disabled></p>
			<input type="text" placeholder="FULL NAME" name="a_name" value="<?php echo htmlspecialchars($aname); ?>"><br>
			<input type="text" placeholder="PASSWORD" name="a_pwd"><br>
			<input type="text" placeholder="CONTACT NO." name="a_phone" value="<?php echo htmlspecialchars($aphone); ?>"><br>
			<input type="text" placeholder="EMAIL ID" name="a_email" value="<?php echo htmlspecialchars($aemail); ?>"><br>
			<br><br><center><button type="submit" name="submit">UPDATE</button></center>
		</form>
		</div>
		<?php
			if(isset($result)) {
				//echo $result;
			}
		?>
	</body>
</html>