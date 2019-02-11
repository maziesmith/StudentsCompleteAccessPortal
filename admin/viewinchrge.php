<?php
	session_start();
	echo '<br>';
	$h=$_SESSION['atype'];

?>
	
<!DOCTYPE html>
<html>
	<head>
		<title>VIEW Inchrge</title>
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
		
		<div>	<form action="viewinchrge.php" method="POST">	
		<br><h1>View Incharges :--</h1><br><br>
		</div></form>
		<?php
		@$con=mysql_connect('localhost', 'root', '');
		if($con) 
		{
			$sel=mysql_select_db('SCAP');
				if($sel) 
				{
					$query="select * from SubjDet";
					if($result=mysql_query($query))
					{
						
							$t_id=array();
							$subject=array();                                         
							$sem=array();
							$t_name=array();

							for($i=0; $row=mysql_fetch_assoc($result); $i++)
							{
								$t_id[$i]=$row['t_id'];
								$t_name[$i]=$row['t_nam'];
								$subject[$i]=$row['subject'];                                         
								$sem[$i]=$row['sem'];
							}
							 $count=count($t_id);

							echo '<table bgcolor="#81b5d6"><th>T_ID</th><th>T_NAME</th><th>SUBJECT</th><th>SEM</th>';
							for($i=0; $i<$count;$i++)
							{
								echo '<tr><td>'. $t_id[$i] .'</td><td>'.$t_name[$i].'</td><td>'. $subject[$i] .'</td><td>'. $sem[$i] .'</td></tr>';
							}
							echo '</table>';
					}
				}
		
		}
		?>
		</div>
	</body>
</html>