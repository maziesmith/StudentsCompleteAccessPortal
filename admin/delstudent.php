<?php
session_start();
echo '<br>';
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Student</title>
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
		
	<form action="delstudent.php" method="POST"><br><h1>Delete Student :--</h1><br><br>
		<input type="text" name="sname" placeholder="NAME" ><br>
		<br><center><button type="submit" name="submit">DELETE</button></center>		
	</form>
</body>
<?php
if (isset($_POST['submit']))
{
	if(!$_POST['sname'])
		{
			echo '<script>alert("PLEASE WRITE THE NAME OF STUDENT")</script>';
		}
	$sname=$_POST['sname'];
	@$con=mysql_connect('localhost', 'root', '');
	if($con) 
		{
			$sel=mysql_select_db('SCAP');
				if($sel) 
				{
					$query="delete from StudentDet where s_name='$sname'";
					if($result=mysql_query($query))
					{
						//echo "successful";
						echo '<br>';
						echo '<script type="text/javascript">';
						echo 'alert("Student with name '. $_POST['sname'].' is deleted")';
						echo '</script>';  
							
					}else{echo "query problem";}
				}else {echo "scap doesnt exist";}

		}
}
?>
</html>