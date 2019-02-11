<?php
	session_start();
	echo '<br>';
	$h=$_SESSION['stype'];
	if (isset($_POST['submit']))
	 {
		if(!$_POST['no_of_committees'] || !$_POST['committee1'] || !$_POST['designation1'] || !$_POST['committee2'] || !$_POST['designation2'] || !$_POST['committee3'] || !$_POST['designation3'] || !$_POST['committee4'] || !$_POST['designation4'] || !$_POST['achievements'])
		{
			echo '<script>alert("PLEASE ENSURE ALL DETAILS ARE FILLED")</script>';
			
		}
		else{
					$studid=$h;
				
					$no_of_committees=$_POST['no_of_committees'];
					$committee1=$_POST['committee1'];
					$designation1=$_POST['designation1'];
					$committee2=$_POST['committee2'];
					$designation2=$_POST['designation2'];
					$committee3=$_POST['committee3'];
					$designation3=$_POST['designation3'];

					$achievements=$_POST['achievements'];
					@$con=mysql_connect('localhost', 'root', '');
					if($con) {
						$sel=mysql_select_db('SCAP');
						if($sel) {
							//echo "1";
							#$query="INSERT INTO ExtraCurricularDet VALUES('".$studid."','".$no_of_committees."','".$committee1."','".$designation1."','".$committee2."','".$designation2."','".$committee3."','".$designation3."','".$achievements."')";
							$query="UPDATE ExtraCurricularDet SET no_of_committees=".$no_of_committees.",committee1='".$committee1."',desg1='".$designation1."',committee2='".$committee2."',desg2='".$designation2."',committee3='".$committee3."',desg3='".$designation3."',achievements='".$achievements."' WHERE s_id='".$studid."'";
							//echo "2";
							if($res=mysql_query($query)) {
								$result="successful";
								echo '<script>alert("DETAILS UPDATED")</script>';
							}
							else {
								$result="not successful";
							}
						} else {
							//echo "string";
						}
					} else{
						//echo "Database connection error";
					}
					mysql_close();
			}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>OTHER DETAILS</title>
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
		
		<form method="POST" action="extracurriculardetfill.php">
		<h1>Extra Curricular Details Form :--</h1><br><br>	
			<?php
				@$con=mysql_connect('localhost', 'root', '');
				if($con) 
				{
					$sel=mysql_select_db('SCAP');
					if($sel) 
					{
						$query="select * from ExtraCurricularDet where s_id='$h'";
						if($result=mysql_query($query))
						{
							//echo "successful";
							echo '<br>';
							for($i=0; $row=mysql_fetch_assoc($result); $i++)
							{
								$stunocom=$row['no_of_committees'];
								$stucom1=$row['committee1'];
								$studesg1=$row['desg1'];
								$stucom2=$row['committee2'];
								$studesg2=$row['desg2'];
								$stucom3=$row['committee3'];
								$studesg3=$row['desg3'];
								$stuahv=$row['achievements'];
							}
						}else{echo "query problem";}
					}else {echo "scap doesnt exist";}
				}
			?>
			<p><input type="text" placeholder="STUDENT ID" name="studid" value="<?php echo htmlspecialchars($h); ?>" disabled></p>
			<p><input type="text" placeholder="NO. OF COMMITTEES WORKED IN" name="no_of_committees" value="<?php echo htmlspecialchars($stunocom); ?>"></p>
			<table>
				<tr>
					<td><input type="text" placeholder="COMMITTEE NAME" name="committee1" value="<?php echo htmlspecialchars($stucom1); ?>"></td>
					<td><input type="text" placeholder="DESIGNATION" name="designation1" value="<?php echo htmlspecialchars($studesg1); ?>"></td>
				</tr>
				<tr>
					<td><input type="text" placeholder="COMMITTEE NAME" name="committee2" value="<?php echo htmlspecialchars($stucom2); ?>"></td>
					<td><input type="text" placeholder="DESIGNATION" name="designation2" value="<?php echo htmlspecialchars($studesg2); ?>"></td>
				</tr>
				<tr>
					<td><input type="text" placeholder="COMMITTEE NAME" name="committee3" value="<?php echo htmlspecialchars($stucom3); ?>"></td>
					<td><input type="text" placeholder="DESIGNATION" name="designation3" value="<?php echo htmlspecialchars($studesg3); ?>"></td>
				</tr>
			</table>
			<br>
			<p><input type="text" placeholder="ACHIEVEMENTS" name="achievements" value="<?php echo htmlspecialchars($stuahv); ?>"></p>
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