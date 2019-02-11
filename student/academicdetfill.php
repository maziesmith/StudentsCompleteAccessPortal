<?php
	session_start();
	echo '<br>';
	$h=$_SESSION['stype'];
	
		if (isset($_POST['submit']))
	 	{
					if(!$_POST['stream'] || !$_POST['SSC'] || !$_POST['HSC_Diploma'] ||!$_POST['sem_1'] || !$_POST['sem_2'] || !$_POST['sem_3'] || !$_POST['sem_4'] || !$_POST['sem_5'] || !$_POST['sem_6'] || !$_POST['sem_7'] || !$_POST['sem_8'] || !$_POST['agg'] || !$_POST['live_kt'] || !$_POST['dead_kt'])
					{
						echo '<script>alert("PLEASE ENSURE ALL FEILDS ARE FILLED")</script>';
					}
					else
					{

												$s_id=$h;
												$stream=$_POST['stream'];
												$SSC=$_POST['SSC'];
												$HSC_Diploma=$_POST['HSC_Diploma'];
												$sem_1=$_POST['sem_1'];
												$sem_2=$_POST['sem_2'];
												$sem_3=$_POST['sem_3'];
												$sem_4=$_POST['sem_4'];
												$sem_5=$_POST['sem_5'];
												$sem_6=$_POST['sem_6'];
												$sem_7=$_POST['sem_7'];
												$sem_8=$_POST['sem_8'];
												$agg=$_POST['agg'];
												$live_kt=$_POST['live_kt'];
												$dead_kt=$_POST['dead_kt'];
												@$con=mysql_connect('localhost', 'root', '');
												if($con) {
													$sel=mysql_select_db('SCAP');
													if($sel) {
														//echo "1";
														#$query="INSERT INTO AcademicDet VALUES('".$s_id."','".$stream."',".$SSC.",".$HSC_Diploma.",".$sem_1.",".$sem_2.",".$sem_3.",".$sem_4.",".$sem_5.",".$sem_6.",".$sem_7.",".$sem_8.",".$agg.",".$live_kt.",".$dead_kt.")";
														$query="UPDATE AcademicDet SET stream='".$stream."',SSC=".$SSC.",HSC_Diploma=".$HSC_Diploma.",sem_1=".$sem_1.",sem_2=".$sem_2.",sem_3=".$sem_3.",sem_4=".$sem_4.",sem_5=".$sem_5.",sem_6=".$sem_6.",sem_7=".$sem_7.",sem_8=".$sem_8.",agg=".$agg.",live_kt=".$live_kt.",dead_kt=".$dead_kt." WHERE s_id='".$s_id."'";
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
													echo "Database connection error";
												}
									
									mysql_close();
					}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ACADEMICS FORM</title>
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
		
		<form method="POST" action="academicdetfill.php">
		<br><h1>Academic Details Form :-</h1><br><br>
			<?php
				@$con=mysql_connect('localhost', 'root', '');
				if($con) 
				{
					$sel=mysql_select_db('SCAP');
					if($sel) 
					{
						$query="select * from AcademicDet where s_id='$h'";
						if($result=mysql_query($query))
						{
							
							echo '<br>';
								for($i=0; $row=mysql_fetch_assoc($result); $i++)
								{
									$stustream=$row['stream'];
									$stussc=$row['SSC'];
									$stuhscd=$row['HSC_Diploma'];
									$stusem1=$row['sem_1'];
									$stusem2=$row['sem_2'];
									$stusem3=$row['sem_3'];
									$stusem4=$row['sem_4'];
									$stusem5=$row['sem_5'];
									$stusem6=$row['sem_6'];
									$stusem7=$row['sem_7'];
									$stusem8=$row['sem_8'];
									$stuagg=$row['agg'];
									$stulkt=$row['live_kt'];
									$studkt=$row['dead_kt'];
								}
						}else{echo "query problem";}
					}else {echo "scap doesnt exist";}
				}
			?>
			<input type="text" placeholder="STUDENT ID" name="s_id" value="<?php echo htmlspecialchars($h); ?>" disabled><br>
			<input type="text" placeholder="STREAM" name="stream" value="<?php echo htmlspecialchars($stustream); ?>"><br>
			<input type="text" placeholder="SSC %" name="SSC" value="<?php echo htmlspecialchars($stussc); ?>"><br>
			<input type="text" placeholder="HSC/Diploma %" name="HSC_Diploma" value="<?php echo htmlspecialchars($stuhscd); ?>"><br>
			<input type="text" placeholder="SEM 1 %" name="sem_1" value="<?php echo htmlspecialchars($stusem1); ?>"><br>
			<input type="text" placeholder="SEM 2 %" name="sem_2" value="<?php echo htmlspecialchars($stusem2); ?>"><br>
			<input type="text" placeholder="SEM 3 %" name="sem_3" value="<?php echo htmlspecialchars($stusem3); ?>"><br>
			<input type="text" placeholder="SEM 4 %" name="sem_4" value="<?php echo htmlspecialchars($stusem4); ?>"><br>
			<input type="text" placeholder="SEM 5 %" name="sem_5" value="<?php echo htmlspecialchars($stusem5); ?>"><br>
			<input type="text" placeholder="SEM 6 %" name="sem_6" value="<?php echo htmlspecialchars($stusem6); ?>"><br>
			<input type="text" placeholder="SEM 7 %" name="sem_7" value="<?php echo htmlspecialchars($stusem7); ?>"><br>
			<input type="text" placeholder="SEM 8 %" name="sem_8" value="<?php echo htmlspecialchars($stusem8); ?>"><br>
			<input type="text" placeholder="DEGREE AGGREGATE %" name="agg" value="<?php echo htmlspecialchars($stuagg); ?>"><br>
			<input type="text" placeholder="LIVE KT" name="live_kt" value="<?php echo htmlspecialchars($stulkt); ?>"><br>
			<input type="text" placeholder="DEAD KT" name="dead_kt" value="<?php echo htmlspecialchars($studkt); ?>"><br>
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