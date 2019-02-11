<?php
session_start();
echo '<br>';
?>
	
<!DOCTYPE html>
<html>
	<head>
		<title>Notification</title>
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
	
	<div><br><br>
	<form method="POST" action="adminnot.php">
	<textarea name="msg" placeholder="NOTIFICATION" rows="5" cols="60"></textarea><br><br>
	<center><button type="submit" name="submit">CREATE NOTIFICATION</button></centre>
	</form></div>
	<?php
	@$a=$_POST['msg'];
	$_SESSION['msg1']=$a;
	$today=date("Y-m-d");	
	@$con=mysql_connect('localhost', 'root', '');
	if(isset($_POST['submit']))
	{
		if($con) 
		{
			$sel=mysql_select_db('SCAP');
			if($sel) 
			{
				$query="INSERT INTO NotDet VALUES ('".$today."','".$a."')";
				if($result=mysql_query($query))
				{
					 //echo "SUCCESSFUL";
					echo '<script type="text/javascript">';
					echo 'alert("Notification created as:'. $a.' ")';
					echo '</script>';  
				}
								/*BLOCK TO SEND EMAIL TO DEFAULTER STUDENT
										$queryemail="select s_email from StudentDet";
										if($resultemail=mysql_query($queryemail))
										{
											$rowemail=mysql_fetch_assoc($resultemail);
											$emil=$rowemail['s_email'];
											$to = $emil;
											$subject = "Defaulter";
											$txt = $a;
											$headers = "From: admin@scap.com";              //goto php.ini file search for mail [function] and put your doamin name for mail server
											
											mail($to,$subject,$txt,$headers);
										}
								//END OF BLOCK TO SEND EMAIL*/
			}else {echo "SCAP doesnt exist";}
		}else{echo "conn prob";}
	}
	?>
	</div>
	</div>
	</body>
</html>