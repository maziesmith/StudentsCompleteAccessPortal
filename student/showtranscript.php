<?php
	session_start();
	$sid=$_SESSION['stype'];
	@$con=mysql_connect('localhost', 'root', '');
	if($con) 
		{
			$sel=mysql_select_db('SCAP');
				if($sel) 
				{
					$perf=0;
					$query="select * from StudentDet where s_id='$sid'";
					if($result=mysql_query($query))
					{
							$row=mysql_fetch_assoc($result);
								$stuid=$row['s_id'];
								$stuname=$row['s_name'];
								$stupwd=$row['s_pwd'];                                         
								$stuclass=$row['s_class'];
								$stuphone=$row['s_phone'];
								$stuadd=$row['s_caddress'];
								$stuemail=$row['s_email'];
								$studp=$row['s_dp'];
								
							// echo '<img src="$studp">';
							
					}else{echo "query problem in StudentDet";}
					$query2="select * from AcademicDet where s_id='$sid'";
					if($result2=mysql_query($query2))
					{
						$row=mysql_fetch_assoc($result2);
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
							if($stuagg>=60){$perf=$perf+10;}
						
					}else{echo "query problem in AcademicDet";}
					$query3="select * from ExtraCurricularDet where s_id='$sid'";
						if($result3=mysql_query($query3))
						{
							$row=mysql_fetch_assoc($result3);
									$stucom1=$row['committee1'];
									$studesg1=$row['desg1'];
									$stucom2=$row['committee2'];
									$studesg2=$row['desg2'];
									$stucom3=$row['committee3'];
									$studesg3=$row['desg3'];
									$stuahv=$row['achievements'];
									
						}else{echo "query problem in Extracurriculardet";}
					
				}else {echo "scap doesnt exist";}

		}else{echo "connection doesnt exist";}

//@mysql_close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Transcript</title>
</head>
<body>
<center><h2>University of Mumbai</h2></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="mu.png" align="top">
<br>
<center><h2>Thadomal Shahani Engineering College</h2><br></center>
<br>
<center><h2>OFFICIAL TRANSCRIPT</h2></center>
<br><br>
<img src="<?php echo $studp; ?>" height="120" width="120" align="right">
<h3>
	Name :<?php echo $stuname ?>
<br><br>
	<?php 
		echo "B.E ";
		echo $stustream;
		echo '<br>';
		echo '<br>';
		if($stusem1!="" || $stusem1!=0)
				{echo "SEM 1: ".$stusem1;}

				echo '<br>';
		echo '<br>';
		if($stusem2!="" || $stusem2!="0")
				{echo "SEM 2: ".$stusem2;}

				echo '<br>';
		echo '<br>';
		if($stusem3!=""  || $stusem3!="0")
				{echo "SEM 3: ".$stusem3;}

				echo '<br>';
		echo '<br>';
		if($stusem4!=""  || $stusem4!="0")
				{echo "SEM 4: ".$stusem4;}

				echo '<br>';
		echo '<br>';
		if($stusem5!=""  || $stusem5!="0")
				{echo "SEM 5: ".$stusem5;}
								echo '<br>';
		echo '<br>';
		if($stusem6!=""  || $stusem6!="0")
				{echo "SEM 6: ".$stusem6;}
								echo '<br>';
		echo '<br>';
		if($stusem7!=""  || $stusem7!="0")
				{echo "SEM 7: ".$stusem7;}
								echo '<br>';
		echo '<br>';
		if($stusem8!=""  || $stusem8!="0")
				{echo "SEM 8: ".$stusem8;}

	?>
</h3>


</body>
</html>