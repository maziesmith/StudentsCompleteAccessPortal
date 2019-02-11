<?php
	session_start();
	echo '<br>';
?>
<!-- DOCTYPE HTML-->
<html>
<head>
	<title>View Attendance</title>
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
				if(isset($result)) 
				{                           
					echo $result;
				}
			?>
		</div>
		<div>		
		
		<form method="POST" action="viewatt.php"><br><h1>View Attendance :--</h1><br><br>
			<input type="text" placeholder="TEACHER ID" name="t_id" value="<?php echo htmlspecialchars($_SESSION['ttype']); ?>" disabled><br>
			<input type="text" placeholder="CLASS" name="class"><br>
			<input type="text" placeholder="ALL/SID" name="option"><br>
			<input type="text" placeholder="SUBJecT" name="subj"><br>
			<br><center><button type="submit" name="submit">VIEW ATTENDANCE</button></center>
		</form>
		<?php 
			$w=$_SESSION['ttype'];
			if (isset($_POST['submit']))
			 {
					if(!$_POST['class'] || !$_POST['option'] ||!$_POST['subj'])
					{
						echo '<script>alert("PLEASE FILL ALL DETAILS")</script>';
						goto KHATAM;
					}
									$tid=$w;
									
									@$con=mysql_connect('localhost', 'root', '');
									if($con) 
									{
										$sel=mysql_select_db('SCAP');
										if($sel) 
										{	//QUERY TO CHECK ONLY TEACHER INCHARGE CAN VIEW HER SUBJCT
											$querymain="select t_id,subject from SubjDet where t_id='$tid'";
											if($resultmain=mysql_query($querymain))
											{
												$class=$_POST['class'];
												$option=$_POST['option'];
												$subj=$_POST['subj'];

												for($j=0;$rowmain=mysql_fetch_assoc($resultmain);$j++)
												{
													$tsub=$rowmain['subject'];				//FETCHING TEACHER INCHARGES SUBJECT FOR THE CURRENT LOGGED IN T_ID
												}
												if($tsub!=$subj)							//IF THE TEACHER IS REALLY AN INCHARGE OF THIS SUBJECT
													{
														echo '<script>alert("YOU CAN ONLY VIEW ATTENDANCE FOR YOUR OWN SUBJECT")</script>';
														goto KHATAM;
													}

														if($option=="ALL")
														{	//QUERY TO CHECK ALL STUDNTS ATTENDANCE
															$query="select s_id,subject,sclass,t_id,sum(att) from AttDet where subject='$subj' and sclass='$class' group by s_id";
														}
														else
														{	//QUERY TO CHECK A PARTICULAR STUDENTS ATTENDANCE
															$query="select s_id,subject,sclass,t_id,sum(att) from AttDet where subject='$subj' and sclass='$class' and s_id='$option' group by s_id";				
														}

														//QUERY FOR COUNTING LECS CONDUCTED OF A PARTICULAR SUBJECT
														$query2="select count(DISTINCT d_nt) from AttDet where subject='$subj' and sclass='$class'";
														if($result2=mysql_query($query2))
														{
															$d_nt=array();
															for($u=0;$row=mysql_fetch_assoc($result2);$u++)
															{
																$d_nt[$u]=$row['count(DISTINCT d_nt)'];
															}
															$kitna=count($d_nt);
															//echo $kitna.'<br>';
															$total=0;
														}

														//END OF MODULE FOR TOTAL LECS CONDUCTED
														//BLOCK TO RETIEVE ALL/STUDENTS ATTENDANCE
														if($result=mysql_query($query)) 							          
														{
															$stuid=array();
															$tiid=array();                                         
															$stuclass=array();
															$stusubj=array();
															$stuatt=array();
															for($i=0; $row=mysql_fetch_assoc($result); $i++)
															{
																$stuid[$i]=$row['s_id'];
																$tiid[$i]=$row['t_id'];
																$stusubj[$i]=$row['subject'];
																$stuclass[$i]=$row['sclass'];
																$stuatt[$i]=$row['sum(att)'];
															}
												    		$count=count($stuid);                                              
														}
														$r=0;
														//END OF BLOCK TO STUDENTS ATTENDANCE
														echo '<br><br>';
														echo '<table bgcolor="#81b5d6"><th>SID</th><th>Teacher ID</th><th>Subject</th><th>Class</th><th>Attended</th><th>Total Conducted</th><th>% Attendance</th>';
														for($i=0; $i<$count;$i++)
														{
															$per=($stuatt[$i]/$d_nt[$total])*100;
															$percnt=(round($per,2));						//CALCULATING PERCENTAGE ATTENDANCE
															echo '<tr><td>'. $stuid[$i] .'</td><td>'.$tiid[$i].'</td><td>'. $stusubj[$i] .'</td><td>'. $stuclass[$i] .'</td><td>'. $stuatt[$i].'</td><td>'.$d_nt[$total].'</td><td>'.$percnt.'</td></tr>';
														}
														echo '</table>';
														//echo " Total lectures conducted= ".$d_nt[$total];
														
											}else{echo "Only Subject incharges allowed to see Attendance";}
										}else {echo "scap doesnt exist";}
									}else {echo "connection error";}
			}
			
			@mysql_close();
			KHATAM:{}
		?>
		</div>
		</div>
</body>
</html>