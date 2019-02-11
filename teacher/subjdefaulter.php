<?php
	session_start();
	echo '<br>';
?>
<!-- DOCTYPE HTML-->
<html>
<head>
	<title>View Defaulters</title>
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
		
		<form method="POST" action="subjdefaulter.php"><br><h1>View Defaulters :--</h1><br><br>
			<input type="text" placeholder="CLASS" name="class"><br>
			<input type="text" placeholder="CUT OFF %" name="cutoff"><br>
			<br><center><button type="submit" name="submit">DEFAULTERS</button></center>
		</form>
<?php
$w=$_SESSION['ttype'];
if (isset($_POST['submit']))
{
	if(!$_POST['class'] || !$_POST['cutoff'])
	{
		echo '<script>alert("PLEASE FILL ALL DETAILS")</script>';
	}
	else{
			$tid=$w;
			$cnt=0;
			$sclass=$_POST['class'];
			$_SESSION['class']=$sclass;
			$cutoff=$_POST['cutoff'];
			$_SESSION['cutoff']=$cutoff;
			@$con=mysql_connect('localhost', 'root', '');
			if($con) 
			{
				$sel=mysql_select_db('SCAP');
				if($sel) 
				{
					//BLOCK TO RETIEVE ALL STUDENTS OF A CLASS
					$queryclass="select s_id from StudentDet where s_class='$sclass'";
					if($resultclass=mysql_query($queryclass))
					{
						$stuid=array();
						for($q=0;$row=mysql_fetch_assoc($resultclass);$q++)
						{
							$stuid[$q]=$row['s_id'];
							//echo $stuid[$q]." ";
						}
						$countids=count($stuid);
					}
					//END OF MODULE TO RETIEVE ALL STUDENTS FROM A PARTICULAR CLASS
					//HIS SUM OF ATTENDANCE:
					$subject=array();
					$sumatt=array();
					$d_nt=array();
					$percntage=array(array());
					$countsubj=0;
					echo '<br><br>';
					echo '<table bgcolor="#81b5d6"><th>'."SID".'</th>';
					//block for subj headers
					$querysubj="select subject from AttDet where sclass='$sclass' group by subject";
					if($resultsubj=mysql_query($querysubj))
					{
						for($h=0;$rowh=mysql_fetch_assoc($resultsubj);$h++)
						{
							echo '<th>'.$rowh['subject'].'</th>';
							$countsubj=$countsubj+1;
						}
					}
					//block ends
					$flag=array();
					for($i=0;$i<$countids;$i++)
						{ $flag[$i]=0;}

					for($i=0;$i<$countids;$i++)
					{
						$queryatt="select subject,sum(att) from AttDet where s_id='$stuid[$i]' and sclass='$sclass' group by subject";
						if($resultatt=mysql_query($queryatt)) 							          
						{
								for($o=0;$row=mysql_fetch_assoc($resultatt);$o++)
								{
									$subject[$o]=$row['subject'];
									$sumatt[$o]=$row['sum(att)'];
									//BLOCK FOR CALCULATING LECS CONDUCTED OF SUB[I]
									$query2="select count(DISTINCT d_nt) from AttDet where subject='$subject[$o]' and sclass='$sclass'";      //$STUSUBJ[$I] WILL RUN EACH SUBJECT AND USKA TOTAL LECS IT WILL FIND
									if($result2=mysql_query($query2))
									{
										$row2=mysql_fetch_assoc($result2);
										$d_nt[$o]=$row2['count(DISTINCT d_nt)'];
									}
									//END OF LEC COUNTING MODULE
									$per=($sumatt[$o]/$d_nt[$o])*100;
									$percnt=(round($per,2));
									$percntage[$i][$o]=$percnt;
									if($percnt<=$cutoff)
									{
										$flag[$i]=$flag[$i]+1;
										//$cnt=$cnt+1;
										//echo $stuid[$i]." ".$percntage[$i][$o]." yo yo  ".$subject[$o].'<br>';

									}
									else
									{
										$flag[$i]=$flag[$i]+0;
									}	
										
								}
						}
						
					}
					
					//END OF HIS ATTENDANCE
					//block to display the criminals
						//$cnt=0;
					for($i=0;$i<$countids;$i++)
						{
							if($flag[$i]>=1){ $cnt=$cnt+1;}
						}
						for($i=0;$i<$countids;$i++)
						{
							if($flag[$i]>=1)
							{	
								echo '<tr><td>'.$stuid[$i].'</td>';
								for($o=0;$o<$countsubj;$o++)
								{
									if($percntage[$i][$o]<=$cutoff)
									{
										echo '<td bgcolor="#FF0000">'.$percntage[$i][$o].'</td>';
									}
									else
									{
										echo '<td>'.$percntage[$i][$o].'</td>';
									}
								}
							}
							echo '</tr>';
						}
						
					//END OF HIS ATTENDANCE
						echo '<script type="text/javascript">
						<!--
						alert("A total of '. $cnt.' students are defaulters among '.$countids.' students of '.$sclass.'")
						//-->
						</script>';
						echo '<h3>';
						echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
						echo "A total of ". $cnt." students are defaulters among ".$countids." from class ".$sclass." ";
						echo '</h3>';

					//end of block
				}
			}
		}
}	

?>

		</div>
		</div>
</body>
</html>