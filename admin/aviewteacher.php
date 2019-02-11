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
		
	<form action="aviewteacher.php" method="POST"><br><h1>View Teacher Details :--</h1><br><br>
		<input type="text" name="name" placeholder="NAME" ><br>
		<br><center><button type="submit" name="submit">FIND</button></center>		
	</form>
</body>
<?php
if (isset($_POST['submit']))
{
	if(!$_POST['name'])
		{
			echo '<script>alert("PLEASE FILL THE NAME")</script>';
		}
	$tname="%".$_POST['name']."%";
	@$con=mysql_connect('localhost', 'root', '');
	if($con) 
		{
			$sel=mysql_select_db('SCAP');
				if($sel) 
				{
					$query="select * from TeacherDet where t_name like '$tname'";
					if($result=mysql_query($query))
					{
							$row=mysql_fetch_assoc($result);
							
								$tid=$row['t_id'];
								$tname=$row['t_name'];                                         
								$tphone=$row['t_phone'];
								$temail=$row['t_mail'];
								$tsubject=$row['t_sub'];
							
							 //$count=count($tid);
								echo '<br><br>';
							echo '<table bgcolor="#81b5d6"><th>TID</th><th>Name</th><th>Phone no</th><th>Email</th><th>Subject Expertise</th>';
								echo '<tr><td>'. $tid .'</td><td>'. $tname .'</td><td>'. $tphone .'</td><td>'. $temail .'</td><td>'.$tsubject.'</td></tr>';
							echo '</table>';
					}else{echo "query problem";}
				}else {echo "scap doesnt exist";}

		}
}
?>
</html>