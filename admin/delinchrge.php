<?php
	session_start();
	echo '<br>';
	$h=$_SESSION['atype'];

?>
	
<!DOCTYPE html>
<html>
	<head>
		<title>DEL Inchrge</title>
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
		
		<form method="POST" action="delinchrge.php"><br><h1>Delete Incharges :--</h1><br><br>
		<p><input type="text" name="tname" placeholder="Teachers Name"></p>
		
		<br><br><center><button type="submit" name="submit">DELETE</button></center>
		</form>
		</div>
		</div>
		<?php
				if (isset($_POST['submit']))
			 	{
					if(!$_POST['tname'])
					{
						echo '<script>alert("PLEASE ENTER DETAILS")</script>';
						goto KHATAM;
					}
					$tname=$_POST['tname'];
					
					@$con=mysql_connect('localhost', 'root', '');
					if($con) 
					{
						$sel=mysql_select_db('SCAP');
						if($sel) 
						{
							$query1="select t_id from TeacherDet where t_name like '%$tname%'";
							if($result1=mysql_query($query1))
							{
								for($i=0; $row1=mysql_fetch_assoc($result1); $i++)
									{
									$t_id=$row1['t_id'];
									} 
							}

							$query="delete from SubjDet where t_id='$t_id'";
							if($result=mysql_query($query))
							{
								echo '<script type="text/javascript">';
								echo 'alert("Teacher '. $_POST['tname'].' is unassigned")';
								echo '</script>';  
							}


						}else{echo "scap doesnt exist";}
					}else{echo "conn problem";}

					KHATAM:{}
				}
		?>
	</body>
</html>