<?php
	session_start();
	echo '<br>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Transcript Requests</title>
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
<?php 
				//$sid=$_POST['id'];
				@$con=mysql_connect('localhost', 'root', '');
				if($con) 
					{
						$sel=mysql_select_db('SCAP');
							if($sel) 
							{
								$perf=0;
								$studoc1=array();
								$studoc2=array();
								$studoc3=array();
								$studoc4=array();
								$studoc5=array();
								$studoc6=array();
								$studoc7=array();
								$studoc8=array();
								$sem=array();
								$stuid=array();
								$status=array();
								$rotation=array();
								$query="select * from TranscriptDet";
								if($result=mysql_query($query))
								{
										for($i=0;$row=mysql_fetch_assoc($result);$i++)
										{
											$stuid[$i]=$row['s_id'];
											$sem[$i]=$row['s_sem'];
											$studoc1[$i]=$row['s_doc1'];
											$studoc2[$i]=$row['s_doc2'];
											$studoc3[$i]=$row['s_doc3'];
											$studoc4[$i]=$row['s_doc4'];
											$studoc5[$i]=$row['s_doc5'];
											$studoc6[$i]=$row['s_doc6'];
											$studoc7[$i]=$row['s_doc7'];
											$studoc8[$i]=$row['s_doc8'];
											$status[$i]=$row['s_request'];
											$rotation[$i]=$sem[$i]-1;
										}
										$loop=count($stuid);
										//echo $loop;			
								}
								
								for($i=0;$i<$loop;$i++)
								{	$flag=0;
									if($status[$i]=="Awaiting")
									{
										
										echo '<table><tr>';
												if($studoc1[$i]!="../student/uploads/")
											 	{
											 		echo '<td>';
											 		echo '<img src="'.$studoc1[$i].'" height="200" width="200">';
											 		echo '</td>';
											 		$flag=1;
											 	}	
											 	if($studoc2[$i]!="../student/uploads/")
											 	{
											 		echo '<td>';
											 		echo '<img src="'.$studoc2[$i].'" height="200" width="200">';
											 		echo '</td>';
											 		$flag=1;
											 	}	 	
											 	if($studoc3[$i]!="../student/uploads/")
											 	{
											 		echo '<td>';
											 		echo '<img src="'.$studoc3[$i].'" height="200" width="200">';
											 		echo '</td>';
											 		$flag=1;
											 	}	 	
											 	if($studoc4[$i]!="../student/uploads/")
											 	{
											 		echo '<td>';
											 		echo '<img src="'.$studoc4[$i].'" height="200" width="200">';
											 		echo '</td>';
											 		$flag=1;
											 	}	 	
											 	if($studoc5[$i]!="../student/uploads/")
											 	{
											 		echo '<td>';
											 		echo '<img src="'.$studoc5[$i].'" height="200" width="200">';
											 		echo '</td>';
											 		$flag=1;
											 	}	 	
											 	if($studoc6[$i]!="../student/uploads/")
											 	{
											 		echo '<td>';
											 		echo '<img src="'.$studoc6[$i].'" height="200" width="200">';
											 		echo '</td>';
											 		$flag=1;
											 	}	 	
											 	if($studoc7[$i]!="../student/uploads/")
											 	{
											 		echo '<td>';
											 		echo '<img src="'.$studoc7[$i].'" height="200" width="200">';
											 		echo '</td>';
											 		$flag=1;
											 	}	 	
											 	if($studoc8[$i]!="../student/uploads/")
											 	{
											 		echo '<td>';
											 		echo '<img src="'.$studoc8[$i].'" height="200" width="200">';
											 		echo '</td>';
											 		$flag=1;
											 	}
											 	echo '</tr>';
											 	if($flag==1){
											 		$yo="grntreq.php?sid=".$stuid[$i];
											 	echo '<form action="'.$yo.'" method="POST">';
											 	echo '<br>'; echo $stuid[$i].'<br>';
												echo '<input type="radio" name="permission" value="Yes">'."YES".'<br>';
												echo '<input type="radio" name="permission" value="No">'."NO".'<br>';
												echo '<button type="submit" name="submit">'."Grant".'</button>';
												echo '</form>';}	 	 	
									}

								}
									if($flag!=1)
									{	echo '<h2>'."NO NEW REQUESTS".'</h2>'; }

									
										
							}else {echo "scap doesnt exist";}

					}else{echo "connection doesnt exist";}
		
?>

</form>
</div>
</div>
</body>
</html>