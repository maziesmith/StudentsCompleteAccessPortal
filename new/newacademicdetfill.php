<?php
	session_start();
	echo '<br>';
	$h=$_SESSION['newtype'];
	if (isset($_POST['next']))
	 {
		if(!$_POST['stream'] || !$_POST['SSC'] || !$_POST['HSC_Diploma'])
		{
			echo '<script>alert("PLEASE FILL ALL DETAILS")</script>';
		}
		else{
				$s_id=$h;
				$flag=0;
				$stream=$_POST['stream'];
				$SSC=$_POST['SSC'];
				if(!is_numeric($SSC))
				{
					echo '<script>alert("INVALID SSC PERCENTAGE.PERCENTAGE CANNOT BE NON NUMERIC")</script>';
					$flag=1;
				}
				$HSC_Diploma=$_POST['HSC_Diploma'];
				if(!is_numeric($HSC_Diploma))
				{
					echo '<script>alert("INVALID HSC/Diploma PERCENTAGE.PERCENTAGE CANNOT BE NON NUMERIC")</script>';
					$flag=1;
				}
				$sem_1=$_POST['sem_1'];
				if(!is_numeric($sem_1))
				{
					echo '<script>alert("INVALID SEM 1 PERCENTAGE.PERCENTAGE CANNOT BE NON NUMERIC")</script>';
					$flag=1;
				}
				$sem_2=$_POST['sem_2'];
				if(!is_numeric($sem_2))
				{
					echo '<script>alert("INVALID SEM 2 PERCENTAGE.PERCENTAGE CANNOT BE NON NUMERIC")</script>';
					$flag=1;
				}
				$sem_3=$_POST['sem_3'];
				if(!is_numeric($sem_3))
				{
					echo '<script>alert("INVALID SEM 3 PERCENTAGE.PERCENTAGE CANNOT BE NON NUMERIC")</script>';
					$flag=1;
				}
				$sem_4=$_POST['sem_4'];
				if(!is_numeric($sem_4))
				{
					echo '<script>alert("INVALID SEM 4 PERCENTAGE.PERCENTAGE CANNOT BE NON NUMERIC")</script>';
					$flag=1;
				}
				$sem_5=$_POST['sem_5'];
				if(!is_numeric($sem_5))
				{
					echo '<script>alert("INVALID SEM 5 PERCENTAGE.PERCENTAGE CANNOT BE NON NUMERIC")</script>';
					$flag=1;
				}
				$sem_6=$_POST['sem_6'];
				if(!is_numeric($sem_6))
				{
					echo '<script>alert("INVALID SEM 6 PERCENTAGE.PERCENTAGE CANNOT BE NON NUMERIC")</script>';
					$flag=1;
				}
				$sem_7=$_POST['sem_7'];
				if(!is_numeric($sem_7))
				{
					echo '<script>alert("INVALID SEM 7 PERCENTAGE.PERCENTAGE CANNOT BE NON NUMERIC")</script>';
					$flag=1;
				}
				$sem_8=$_POST['sem_8'];
				if(!is_numeric($sem_8))
				{
					echo '<script>alert("INVALID SEM 1 PERCENTAGE.PERCENTAGE CANNOT BE NON NUMERIC")</script>';
					$flag=1;
				}
				$agg=$_POST['agg'];
				if(!is_numeric($agg))
				{
					echo '<script>alert("INVALID AGGREGATE PERCENTAGE.PERCENTAGE CANNOT BE NON NUMERIC")</script>';
					$flag=1;
				}
				$live_kt=$_POST['live_kt'];
				if(!is_numeric($live_kt))
				{
					echo '<script>alert("INVALID NO. OF LIVE KTs.NO. OF LIVE KTs CANNOT BE NON NUMERIC")</script>';
					$flag=1;
				}
				$dead_kt=$_POST['dead_kt'];
				if(!is_numeric($dead_kt))
				{
					echo '<script>alert("INVALID NO. OF DEAD KTs.NO. OF DEAD KTs CANNOT BE NON NUMERIC")</script>';
					$flag=1;
				}
				if($flag == 0)
				{
				@$con=mysql_connect('localhost', 'root', '');
				if($con) {
					$sel=mysql_select_db('SCAP');
					if($sel) {
						//echo "1";
						$query="INSERT INTO AcademicDet VALUES('".$s_id."','".$stream."',".$SSC.",".$HSC_Diploma.",".$sem_1.",".$sem_2.",".$sem_3.",".$sem_4.",".$sem_5.",".$sem_6.",".$sem_7.",".$sem_8.",".$agg.",".$live_kt.",".$dead_kt.")";
						//echo "2";
						if($res=mysql_query($query)) {
							//$result="successful";
							echo '<script type="text/javascript">
							<!--
							alert("Your Academic Details Are Recorded ")
							window.location = "newextracurriculardetfill.php"
							//-->
							</script>';
						}
						else {
							$result="not successful";
						}
					} else {
						echo "string";
					}
				} else{
					echo "Database connection error";
				}
				mysql_close();}
			}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ACADEMICS FORM</title>
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
				require 'include/newstudentnav.php';                     
				if(isset($result2)) 
				{                           
					echo $result2;
				}
				?>
			</div>
			<div>		
		
		<form method="POST" enctype="multipart/form-data" action="newacademicdetfill.php">
		<h1>Academic Details Form :-</h1><br><br>	
		
		
			<input type="text" placeholder="STUDENT ID" name="s_id" value="<?php echo htmlspecialchars($h); ?>" disabled><br>
			<input type="text" placeholder="STREAM" name="stream"><br>
			<input type="text" placeholder="SSC %" name="SSC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" placeholder="HSC/Diploma %" name="HSC_Diploma"><br>
			<input type="text" placeholder="SEM 1 %" name="sem_1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" placeholder="SEM 2 %" name="sem_2"><br>
			<input type="text" placeholder="SEM 3 %" name="sem_3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" placeholder="SEM 4 %" name="sem_4"><br>
			<input type="text" placeholder="SEM 5 %" name="sem_5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" placeholder="SEM 6 %" name="sem_6"><br>
			<input type="text" placeholder="SEM 7 %" name="sem_7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" placeholder="SEM 8 %" name="sem_8"><br>
			<input type="text" placeholder="DEGREE AGGREGATE %" name="agg"><br>
			<input type="text" placeholder="LIVE KT" name="live_kt"><br>
			<input type="text" placeholder="DEAD KT" name="dead_kt"><br>
			<br><br><center><button type="submit" name="next">NEXT</button></center>
		</form>
		</div>
		<?php
			if(isset($result)) {
				//echo $result;
			}
		?>
	</body>
</html>