<?php
	session_start();
	echo '<br>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Get Transcript</title>
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
		
		<form method="POST" action="gettranscript.php">
		<h2></h2><br><br>
		<br>
		<br>
</div>
<?php
$h=$_SESSION['stype'];
	@$con=mysql_connect('localhost', 'root', '');
						if($con) 
						{
							$sel=mysql_select_db('SCAP');
							if($sel) 
							{
								$query="select s_request from transcriptdet where s_id='$h'";
								if($result=mysql_query($query))
								{
									$row=mysql_fetch_assoc($result);
									$srequest=$row['s_request'];
								}
								if($srequest!="Yes")
								{
									echo '<script>alert("Your transcripts are awaited")</script>';
									goto KHATAM;
								}
								else
								{
									echo '<br><br><br>';
									echo '<script>alert("You will be redirected to your transcripts")</script>';
									echo '<script type="text/javascript" language="javascript"> 
											window.open("showtranscript.php"); 
											</script>'; 
								}
							}
						}
	KHATAM:{}
?>
</div></body>
</html>