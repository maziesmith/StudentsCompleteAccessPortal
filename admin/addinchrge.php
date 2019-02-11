<?php
	session_start();
	echo '<br>';
	$h=$_SESSION['atype'];

?>
	
<!DOCTYPE html>
<html>
	<head>
		<title>ADD Inchrge</title>
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
	
		<form method="POST" action="addinchrge.php">	<br><h1>Assign Teacher Incharge :--</h1><br><br>
		<p><input type="text" name="tname" placeholder="Teachers Name"></p>
		ASSIGN INCHARGE OF:<br>
		<br>
		<p><input type="text" name="subj" placeholder="SUBJECT"></p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sem" value="1">&nbsp;Sem 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="sem" value="2">&nbsp;Sem 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="sem" value="3">&nbsp;Sem 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="sem" value="4">&nbsp;Sem 4<br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sem" value="5">&nbsp;Sem 5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="sem" value="6">&nbsp;Sem 6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="sem" value="7">&nbsp;Sem 7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="sem" value="8">&nbsp;Sem 8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</p>
		<br><br><center><button type="submit" name="submit">SUBMIT</button></center>
		</form>
		</div>
		</div>
		<?php
				if (isset($_POST['submit']))
			 	{
					if(!$_POST['tname'] || !$_POST['subj'] || !$_POST['sem'])
					{
						echo '<script>alert("PLEASE FILL ALL DETAILS")</script>';
						goto KHATAM;
					}

					$tname=$_POST['tname'];
					$tsub=$_POST['subj'];
					$tsem=$_POST['sem'];
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

							$query="INSERT INTO SubjDet VALUES ('".$t_id."','".$tname."','".$tsub."','".$tsem."')";
							if($result=mysql_query($query))
							{
								echo '<script>alert("TEACHER INCHARGE ASSIGNED")</script>';
							}


						}else{echo "scap doesnt exist";}
					}else{echo "conn problem";}

					KHATAM:{}
				}
		?>
	</body>
</html>