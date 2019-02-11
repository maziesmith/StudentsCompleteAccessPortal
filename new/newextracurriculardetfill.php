<?php
	session_start();
	echo '<br>';
	$h=$_SESSION['newtype'];
	if (isset($_POST['submit']))
	 {
	 	if(isset($_POST['no_of_committees'])){
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
						$query="INSERT INTO ExtraCurricularDet VALUES('".$studid."',".$no_of_committees.",'".$committee1."','".$designation1."','".$committee2."','".$designation2."','".$committee3."','".$designation3."','".$achievements."')";
						//echo "2";
						if($res=mysql_query($query)) {
							$result="successful";
					echo '<script>alert("ExtraCurricular Details recorded")</script>';

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
			else
			{
			echo '<script>alert("PLEASE ENSURE ALL DETAILS ARE FILLED")</script>';
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
				require 'include/newstudentnav.php';                     
				if(isset($result2)) 
				{                           
					echo $result2;
				}
				?>
			</div>
			<div>		
		
		<form method="POST" enctype="multipart/form-data" action="newextracurriculardetfill.php">
		<h1>Extra Curricular Details Form :--</h1><br><br>	
		
			

			<p><input type="text" placeholder="STUDENT ID" name="studid"  value="<?php echo htmlspecialchars($h); ?>" disabled></p>
			<p><input type="text" placeholder="NO. OF COMMITTEES WORKED IN" name="no_of_committees"></p>
			<table>
				<tr>
					<td><input type="text" placeholder="COMMITTEE NAME" name="committee1"></td>
					<td><input type="text" placeholder="DESIGNATION" name="designation1"></td>
				</tr>
				<tr>
					<td><input type="text" placeholder="COMMITTEE NAME" name="committee2"></td>
					<td><input type="text" placeholder="DESIGNATION" name="designation2"></td>
				</tr>
				<tr>
					<td><input type="text" placeholder="COMMITTEE NAME" name="committee3"></td>
					<td><input type="text" placeholder="DESIGNATION" name="designation3"></td>
				</tr>
			</table>
			<br><p><textarea rows="7" cols="70" placeholder="ACHIEVEMENTS" name="achievements"></textarea></p><br>
			<center><button type="submit" name="submit">SUBMIT</button></center>
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