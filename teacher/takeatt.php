<?php
session_start();
	echo '<br>';
		$o=$_SESSION['ttype'];
?>
		
<!-- DOCTYPE HTML -->
<html>
	<head>
		<title>TAKE ATTENDANCE</title>
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
		
		<form method="POST" action="takeatt.php"> <br><h1>Take Attendance :--</h1><br><br>
			<input type="text" placeholder="TEACHER ID" name="t_id" value="<?php echo htmlspecialchars($o); ?>" disabled><br>
			<input type="text" placeholder="SUBJECT" name="t_sub"><br>
			<input type="text" placeholder="CLASS" name="class"><br>
			<input type="text" placeholder="DATE(YYYY-MM-DD)" name="dnt"><br><br>
			<select name="TIME">
				<option value="8">8:00 am</option>
				<option value="9">9:00 am</option>
				<option value="10.15">10:15 am</option>
				<option value="11.15">11:15 am</option>
				<option value="1.00">1:00 pm</option>
				<option value="2.00">2:00 pm</option>
				<option value="3.00">3:00 pm</option>
				<option value="4.00">4:00 pm</option>
			</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" placeholder="NO of LECTURE" name="nolec"><br>
			<input type="text" placeholder="PRESENT" name="present"><br>
			<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OR</h2><br>
			<input type="text" placeholder="ABSENT" name="absent"><br>
			<br><center><button type="submit" name="submit">TAKE ATTENDANCE</button></center>
		</form>
		</div>
		</div>
		<?php
			$t_id=$o;

			if (isset($_POST['submit']))
	 		{
				if($_POST['present'] && $_POST['absent'])
				{
					echo '<script>alert("PLEASE ENSURE EITHER PRESENT OR ABSENT ARE ONLY FILLED")</script>';
					//goto KHATAM;
				}
				if(!$_POST['t_sub'] || !$_POST['class'] || !$_POST['dnt'] || !$_POST['TIME'] || !$_POST['nolec'])
				{
					echo '<script>alert("ENSURE ALL DETAILS ARE FILLED")</script>';
					//goto KHATAM;
				}
				$t_sub=$_POST['t_sub'];
				$class=$_POST['class'];
				$dat=$_POST['dnt'];
				$tym=$_POST['TIME'];
				$dnt=$dat." ".$tym;

				$nolec=$_POST['nolec'];
				if($nolec==2)
				{
					$tym2=$_POST['TIME']+1;
					$dnt2=$dat." ".$tym2;
				}
				@$psid=$_POST['present'];
				@$asid=$_POST['absent'];

				@$con=mysql_connect('localhost', 'root', '');
				if($con) 
				{
					$sel=mysql_select_db('SCAP');
						if($sel) 
						{
							$stuid=array();
							$counttotal=0;
							$query1="select s_id from StudentDet where s_class='$class'";
							if($result1=mysql_query($query1))
							{
								$stuid=array();
								for($i=0; $row=mysql_fetch_assoc($result1) ; $i++)
								{
									$stuid[$i]=$row['s_id'];
								}
								$counttotal=count($stuid);
							}

														if($_POST['present'])
							{
								@$presentppl=explode(",", $psid);
								$presentlen= count($presentppl);
								$incr=0;
								while($incr<$counttotal)
								{
									for($i=0;$i<$presentlen;$i++)
									{
										if($stuid[$incr]==$presentppl[$i])
										{	
											$query11="INSERT INTO AttDet VALUES('".$stuid[$incr]."','".$t_id."','".$t_sub."','".$class."','1','".$dnt."')";
											if($result11=mysql_query($query11))
											{ 
												goto ENUF;
											}

										}
									}

									$query12="INSERT INTO AttDet VALUES('".$stuid[$incr]."','".$t_id."','".$t_sub."','".$class."','0','".$dnt."')";
									if($result12=mysql_query($query12))
									{ 
										//echo "12:Student ".$stuid[$incr]." is absent".'<br>';										
									}
									ENUF:{
									$incr=$incr+1;
										 }
								}

							}


							if($_POST['absent'])
							{
								@$absentppl=explode(",", $asid);
								$absentlen= count($absentppl);
								$incr=0;
								while($incr<$counttotal)
								{
									for($i=0;$i<$absentlen;$i++)
									{
										if($stuid[$incr]==$absentppl[$i])
										{
											$query11="INSERT INTO AttDet VALUES('".$stuid[$incr]."','".$t_id."','".$t_sub."','".$class."','0','".$dnt."')";
											if($result11=mysql_query($query11))
											{ 
												//echo "11:Student ".$stuid[$incr]." is absent".'<br>';
												goto ENUF2;
											}

										}
									}

									$query12="INSERT INTO AttDet VALUES('".$stuid[$incr]."','".$t_id."','".$t_sub."','".$class."','1','".$dnt."')";
									if($result12=mysql_query($query12))
									{ 
										//echo "12:Student ".$stuid[$incr]." is present".'<br>';
										
									}
									ENUF2:{
									$incr=$incr+1;
										 }
								}

							}

							if($nolec==2)
							{
												if($_POST['present'])
												{
													@$presentppl=explode(",", $psid);
													$presentlen= count($presentppl);
													$incr=0;
													while($incr<$counttotal)
													{
														for($i=0;$i<$presentlen;$i++)
														{
															if($stuid[$incr]==$presentppl[$i])
															{	
																$query11="INSERT INTO AttDet VALUES('".$stuid[$incr]."','".$t_id."','".$t_sub."','".$class."','1','".$dnt2."')";
																if($result11=mysql_query($query11))
																{ 
																	goto ENUFL;
																}

															}
														}

														$query12="INSERT INTO AttDet VALUES('".$stuid[$incr]."','".$t_id."','".$t_sub."','".$class."','0','".$dnt2."')";
														if($result12=mysql_query($query12))
														{ 
															//echo "12:Student ".$stuid[$incr]." is absent".'<br>';										
														}
														ENUFL:{
														$incr=$incr+1;
															 }
													}

												}


												if($_POST['absent'])
												{
													@$absentppl=explode(",", $asid);
													$absentlen= count($absentppl);
													$incr=0;
													while($incr<$counttotal)
													{
														for($i=0;$i<$absentlen;$i++)
														{
															if($stuid[$incr]==$absentppl[$i])
															{
																$query11="INSERT INTO AttDet VALUES('".$stuid[$incr]."','".$t_id."','".$t_sub."','".$class."','0','".$dnt2."')";
																if($result11=mysql_query($query11))
																{ 
																	//echo "11:Student ".$stuid[$incr]." is absent".'<br>';
																	goto ENUF2L;
																}

															}
														}

														$query12="INSERT INTO AttDet VALUES('".$stuid[$incr]."','".$t_id."','".$t_sub."','".$class."','1','".$dnt2."')";
														if($result12=mysql_query($query12))
														{ 
															//echo "12:Student ".$stuid[$incr]." is present".'<br>';
															
														}
														ENUF2L:{
														$incr=$incr+1;
															 }
													}

												}
							}

						}
				}
			}
		?>
	</body>
</html>
