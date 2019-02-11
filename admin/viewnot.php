<?php
session_start();
echo '<br>';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>SCAP</title>
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
	<br><br><br>
	<div >
		<?php
			@$con=mysql_connect('localhost', 'root', '');
			if($con) 
			{
				$sel=mysql_select_db('SCAP');
				if($sel) 
				{
					$query="select * from NotDet";
					if($result=mysql_query($query))
					{
						$dt=array();
						$not=array();
						for($i=0; $row=mysql_fetch_assoc($result); $i++)
							{
								
								$dt[$i]=$row['d_t'];
								$not[$i]=$row['notify'];
							}
							$count=count($not); 

							echo '<table bgcolor="#81b5d6"><th>Date</th><th>Notification</th>'; 
							for($j=0;$j<$count;$j++)
							{
								echo '<tr><td>'.$dt[$j].'</td><td>'.$not[$j].'</td></tr>';
							}
							echo '</table>';
					}
				}
			}
		?>
	</div>
	</div>
	</body>
</html>