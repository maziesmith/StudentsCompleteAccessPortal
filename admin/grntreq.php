<?php
	$stuid=$_GET['sid'];
	$permssn=$_POST['permission'];
	//$permssn="test";
	@$con=mysql_connect('localhost', 'root', '');
	if($con)
	{
		//echo "1";
		$sel=mysql_select_db('SCAP');
		if($sel)
		{
			//echo "2";
			$query="UPDATE TranscriptDet SET s_request='".$permssn."' where s_id='".$stuid."'";	
			//echo "3";
			if($res=mysql_query($query))
			{
				//echo "updated";
				//echo $permssn;
				echo '<script type="text/javascript">
				<!--
				window.location = "adminreq.php"
				//-->
				</script>';
			}
			else 
			{
				$result="not successful";
			}
		}
		else
		{
			//echo "string";
		}
	}
	else
	{
		echo "Database connection error";
	}
	mysql_close();						
?>