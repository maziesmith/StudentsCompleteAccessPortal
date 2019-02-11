<?php
	session_start();
	echo '<br>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
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
		
		<form method="POST" action="viewme.php">
		<h2>Your Profile :--</h2><br><br>
		Your ratings are done as per...if aggregate is more than 60 we giv 10 and if hes a part of committee we give him +3<br>
		and for anyother achievement we giv +10, for every subject with attendance above 50% we give +5
		<br>
		<br>


<?php

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
								
								echo '<img src="'.$studp.'" height="120" width="120">';
							// echo '<img src="$studp">';
							echo '<h4>';
								echo '<br><br>'."Student ID:". $stuid.'<br><br>'."Name: ". $stuname .'<br><br>'."Password: ".$stupwd.'<br><br>'."Class: ". $stuclass .'<br><br>'."Contact No: ". $stuphone .'<br><br>'."Address: ".$stuadd.'<br><br>'."Email: ".$stuemail." ".'<br>';
							echo '</h4>';		
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
						echo '<br>';
						echo '<h3>Academic Details</h3>';
						echo '<br>';
						echo '<table bgcolor="#81b5d6"><th>Stream</th><th>SSC</th><th>HSC_Diploma</th><th>sem 1</th><th>sem 2</th><th>sem 3</th><th>sem 4</th><th>sem 5</th><th>sem 6</th><th>sem 7</th><th>sem 8</th><th>Aggregate %</th><th>Live kt</th><th>Dead kt</th>';
								echo '<tr><td>'. $stustream .'</td><td>'. $stussc .'</td><td>'. $stuhscd .'</td><td>'. $stusem1 .'</td><td>'.$stusem2.'</td><td>'.$stusem3.'</td><td>'.$stusem4.'</td><td>'.$stusem5.'</td><td>'.$stusem6.'</td><td>'.$stusem7.'</td><td>'.$stusem8.'</td><td>'
								.$stuagg.'</td><td>'.$stulkt.'</td><td>'.$studkt.'</td></tr>';
							echo '</table>';

					}else{echo "query problem in AcademicDet";}
					$query3="select * from ExtraCurricularDet where s_id='$sid'";
						if($result3=mysql_query($query3))
						{
									#echo "in loop";
								echo '<br><br>';
								echo '<h3>Extracurricular Details</h3>';
								echo '<br>';
							$row=mysql_fetch_assoc($result3);
									$stucom1=$row['committee1'];
									$studesg1=$row['desg1'];
									$stucom2=$row['committee2'];
									$studesg2=$row['desg2'];
									$stucom3=$row['committee3'];
									$studesg3=$row['desg3'];
									$stuahv=$row['achievements'];
									echo '<h4>';
									if($stucom1!="0" || $stucom1!="" || isset($stucom1) || $stucom1!="NA")
										{echo '<br>'."Committee Name: ".$stucom1;
										echo '&nbsp;&nbsp;&nbsp;'."Designation: ".$studesg1.'<br><br>';
										$perf=$perf+3;
										}
									if($stucom2!="0" || $stucom2!="" || isset($stucom2) || $stucom2!="NA")
										{echo '<br>'."Committee Name: ".$stucom2;
										echo '&nbsp;&nbsp;&nbsp;'."Designation: ".$studesg2.'<br><br>';
										$perf=$perf+3;
										}
									if($stucom3!="0" || $stucom3!="" || isset($stucom3) || $stucom3!="NA")
										{echo '<br>'."Committee Name: ".$stucom3;
										echo '&nbsp;&nbsp;&nbsp;'."Designation: ".$studesg3.'<br><br>';
										$perf=$perf+3;
										}
									if($stuahv!="0" || isset($stahv) || $stuahv!="NA" || $stuahv!="")
										{echo '<br>'."Achievements: ".$stuahv;
										$perf=$perf+10;
										}
									echo '</h4>';
								

								//echo '<table bgcolor="#81b5d6"><th>Committee1</th><th>Designation</th><th>Committee2</th><th>Designation</th><th>Committee3</th><th>Designation</th><th>Achievements</th>';
								//	echo '<tr><td>'.$stucom1.'</td><td>'.$studesg1.'</td><td>'.$stucom2.'</td><td>'.$studesg2.'</td><td>'.$stucom3.'</td><td>'.$studesg3.'</td><td>'.$stuahv.'</td></tr>';
								//echo '</table>';
						}else{echo "query problem in Extracurriculardet";}
					//BLOCVK TO SEE HIS ATTENDNCE IN EVERY SUBJECT
						$queryatt="select s_id,subject,sum(att) from AttDet where s_id='$sid' and sclass='$stuclass' group by subject";	
						if($resultatt=mysql_query($queryatt)) 							          
						{
							$totalatt=array();                                     
							$stusubj=array();
							$stuatt=array();
							for($i=0; $row=mysql_fetch_assoc($resultatt); $i++)
							{
								
								$stusubj[$i]=$row['subject'];
								$stuatt[$i]=$row['sum(att)'];
								//QUERY FOR COUNTING LECS CONDUCTED OF A PARTICULAR SUBJECT
									$querytt="select count(DISTINCT d_nt) from AttDet where subject='$stusubj[$i]' and sclass='$stuclass'";      
									if($resulttt=mysql_query($querytt))
									{
										$d_nt=array();
										for($u=0;$row=mysql_fetch_assoc($resulttt);$u++)
										{
											$d_nt[$u]=$row['count(DISTINCT d_nt)'];
										}
										$kitna=count($d_nt);
										$total=0;
									}

								//END OF MODULE FOR TOTAL LECS CONDUCTED
								$totalatt[$i]=$d_nt[0];
							}
							$count=count($stusubj);
							for($i=0; $i<$count;$i++)
							{
								$per=($stuatt[$i]/$totalatt[$i])*100;
								$percnt=(round($per,2));
								if($percnt>=50){$perf=$perf+5;}
							}
						}
					//BLOCK ENDS AND KHATAM
					echo '<br><br><br>';
					echo '<h3>YOUR SCORE IS : '.$perf.'</h3>';
					echo '<script type="text/javascript">';
					echo 'alert("The candidates score is '. $perf.' ")';
					echo '</script>';  
				}else {echo "scap doesnt exist";}

		}else{echo "connection doesnt exist";}

//@mysql_close();
?>
</div>

</div></body>
</html>