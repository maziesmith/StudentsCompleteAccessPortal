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
				require 'include/studentnav.php';                     
				if(isset($result)) 
				{                           
					echo $result;
				}
				?>
		</div>
		<div>	
		<form method="POST" action="sviewatt.php">	
		<h1>View Attendance :--</h1><br><br>

			<input type="text" placeholder="STUDENT ID" name="s_id" value="<?php echo htmlspecialchars($_SESSION['stype']); ?>" disabled><br>
		
		<?php
			$w=$_SESSION['stype'];
			
				
				$sid=$w;
				

				@$con=mysql_connect('localhost', 'root', '');
				if($con) 
				{
					$sel=mysql_select_db('SCAP');
					if($sel) 
					{
						$queryclass="select s_class from StudentDet where s_id='$sid'";
						if($resultclass=mysql_query($queryclass))
						{
							$row=mysql_fetch_assoc($resultclass);							//block to retrieve the class of the student
							$class=$row['s_class'];
							//echo '<br>';
							//echo $class;
						}
						
						//BLOCK TO RETIRIEVE STUDENTS ATTENDANCE FOR ALL SUBJECTS
						$query="select s_id,subject,sum(att) from AttDet where s_id='$sid' and sclass='$class' group by subject";	
						if($result=mysql_query($query)) 							          
						{
							$totalatt=array();                                     
							$stusubj=array();
							$stuatt=array();
							for($i=0; $row=mysql_fetch_assoc($result); $i++)
							{
								
								$stusubj[$i]=$row['subject'];
								$stuatt[$i]=$row['sum(att)'];
								//QUERY FOR COUNTING LECS CONDUCTED OF A PARTICULAR SUBJECT
									$query2="select count(DISTINCT d_nt) from AttDet where subject='$stusubj[$i]' and sclass='$class'";      //$STUSUBJ[$I] WILL RUN EACH SUBJECT AND USKA TOTAL LECS IT WILL FIND
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
								$totalatt[$i]=$d_nt[0];
							}
							$count=count($stusubj);
						}
						//echo "ATTENDANCE PERCENTAGES FOR YOU";
						//BLOCK TO DISPLAY EACH SUBJECT AS A COLUMN
						echo'<table bgcolor="#81b5d6"><th></th>';
						for($i=0; $i<$count;$i++)
							{
								echo '<th>'.$stusubj[$i].'</th>';
							}
						echo '<tr><td>ATTENDANCE %</td>';
						for($i=0; $i<$count;$i++)
							{
								$per=($stuatt[$i]/$totalatt[$i])*100;
								$percnt=(round($per,2));
								echo '<td>'.$percnt.'</td>';
							}
						echo '</tr></table>';
						//BLOCK ENDS
						
					}else {echo "scap doesnt exist";}
				}else {echo "connection error";}
		
			
			@mysql_close();
		?>
				</div>
		</div></form>
</body>
</html>