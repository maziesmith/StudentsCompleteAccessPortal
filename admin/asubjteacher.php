<?php
session_start();
echo '<br>';
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Teacher Details</title>
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
		
	<form action="asubjteacher.php" method="POST"><br><h1>View Teacher Details :--</h1><br><br>
		<input type="text" name="subject" placeholder="SUBJECT" ><br>
		<br><center><button type="submit" name="submit">FIND</button></center>		
	</form>
</body>
<?php
if (isset($_POST['submit']))
{
	if(!$_POST['subject'])
		{
			echo '<script>alert("PLEASE FILL THE SUBJECT")</script>';
		}
	$tsub=$_POST['subject'];
	$tsubject="%".$tsub."%";
	@$con=mysql_connect('localhost', 'root', '');
	if($con) 
		{
			$sel=mysql_select_db('SCAP');
				if($sel) 
				{
					$query="select * from TeacherDet where t_sub like'$tsubject'";
					if($result=mysql_query($query))
					{
						//echo "successful";
						echo '<br>';
							$tid=array();
							$tname=array();                                         
							$tphone=array();
							$temail=array();
							$tsubject=array();
							for($i=0; $row=mysql_fetch_assoc($result); $i++)
							{
								$tid[$i]=$row['t_id'];
								$tname[$i]=$row['t_name'];                                         
								$tphone[$i]=$row['t_phone'];
								$temail[$i]=$row['t_mail'];
								$tsubject[$i]=$row['t_sub'];
							}
							 $count=count($tid);
							echo '<table bgcolor="#81b5d6"><th>TID</th><th>Name</th><th>Phone no</th><th>Email</th><th>Subject Expertise</th>';
							for($i=0; $i<$count;$i++)
							{
								echo '<tr><td>'. $tid[$i] .'</td><td>'. $tname[$i] .'</td><td>'. $tphone[$i] .'</td><td>'. $temail[$i] .'</td><td>'.$tsubject[$i].'</td></tr>';
							}
							echo '</table>';
					}else{echo "query problem";}
				}else {echo "scap doesnt exist";}

		}
}
?>
</html>