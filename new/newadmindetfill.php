<?php
	session_start();
	echo '<br>';
	if (isset($_POST['submit']))
	 {
		$flag=0;
		if(!$_POST['a_id'] || !$_POST['a_name'] || !$_POST['a_pwd'] || !$_POST['a_phone'] || !$_POST['a_email'])
		{
			echo '<script>alert("PLEASE FILL ALL DETAILS")</script>';
			$flag=1;
		}
		$a_id=$_POST['a_id'];
		$a_name=$_POST['a_name'];
		if (!preg_match("/^[a-zA-Z ]*$/",$a_name))
		{
  			echo '<script>alert("NAME SHOULD CONSIST OF ALPHABETS AND WHITE SPACE ONLY")</script>';
  			$flag=1;
		}
		$a_pwd=$_POST['a_pwd'];
		$a_phone=$_POST['a_phone'];
		if(!preg_match('/^\+?([0-9]{1,4})\)?[-. ]?([0-9]{10})$/', $a_phone) ) {
 			echo '<script>alert("INVALID PHONE NO.")</script>';
 			$flag=1;
 		}
		$a_email=$_POST['a_email'];
		if (!filter_var($a_email, FILTER_VALIDATE_EMAIL)) {
  			echo '<script>alert("INVALID EMAIL ID")</script>';
  			$flag=1;
		}
		if($flag== 0){
		@$con=mysql_connect('localhost', 'root', '');
		if($con) {
			$sel=mysql_select_db('SCAP');
			if($sel) {
				
				$query="INSERT INTO AdminDet VALUES('".$a_id."','".$a_name."','".$a_pwd."',".$a_phone.",'".$a_email."')";
			
				if($res=mysql_query($query)) {
					$result="successful";
					echo '<script type="text/javascript">';
					echo 'alert("Your Username for the system will be '. $a_id.' ")';
					echo '</script>';  
				}
				else {
					$result="not successful";
				}
			} else {
				//echo "string";
			}
		} else{
			echo "Database connection error";
		}
		mysql_close();}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ADMIN'S FORM</title>
		<style>
				html,
				body 
				{ 
				margin : 0;
				padding : 0;
				font-family: "Play","Helvetica Neue",Helvetica,Arial,sans-serif;
				font-size: 17px;
				line-height: 21px;
				color: #2d2d2d;
				background: url(polaroid.png);;
				}

				h1 {
				color: #ffffff;
				}

				h2 {
				margin-top: 10px;
				}

				a {
				color: #18df92;
				text-decoration: none;
				}	

				#wrapper {
				width: 980px;
				margin: 20px auto;
				}	

				#header {
				width: 980px;
				height: 40px;
				background-color: #81b5d6;
				padding: 20px;
				}

				#menu {
				width: 1020px;
				height: 30px;
				background-color: #81b5d6;
				}

				#menu li {
				float: left;
				}

				#menu ul {
				list-style-type:none;
				margin: 0;
				padding:0;
				}

				#menu a {
				display: block;
				color: #ffffff;
				text-decoration: none;
				padding: 4px 15px;
				font-size: 14px;
				text-transform: uppercase;
				font-weight: 600;
				}

				#menu a:hover {
				background: #000000;
				}

				#content {
				width: 980px;
				background-color: #fafafa;
				padding: 20px;
				}

				input[type=text],input[type=password],input[type=date]
				{
			  	color:#FFF;
				background: #68add8; 
			  	background: linear-gradient(45deg,  #68add8 0%,#8cbede 100%); 
			 	width:250px;
				height:40px;
				margin: 0 auto 10px auto;
			 	font-size:14px;
			 	padding-left:15px;
			  	border:none;
			 	box-shadow: -3px 3px #679acb ;
			 	-webkit-appearance:none;
			 	border-radius:0;
			  	border-top: 1px solid #92c5e2;
			 	border-right: 1px solid #92c5e2;
				}
				input::-webkit-input-placeholder { 
			  	color: #FFF;}
				button[type=submit] 
				{
			    	color: #fff;
			    	background-color:#3f88b8;
			    	font-size: 14px;
			    	height: 40px;
			    	border: none;
			    	margin: 0 auto 0 17px;
			    	padding: 0 20px 0 20px;
			    	-webkit-appearance:none;
			   	border-radius:0;
			   	cursor: pointer;
				}
				button[type=submit]:hover 
				{
			  	background-color:#000000;
				}
			</style>
	</head>
	<body>
		<div id="wrapper">
		<div id="header">
		<h1>TSEC'S SCAP</h1>
		</div>

		<div id="menu">
			<ul>
				
				<li><a href="newadmindetfill.php">Personal Profile</a></li>
				<li><a href="../index.php">LOG OUT</a></li>
			</ul>
		</div>	
		
		<div id="content">		
		<h2>Admin's Details Form :--</h2><br><br>
		Your AdminID wiil be A00Numeric eg:A0029
		<form method="POST" action="newadmindetfill.php">
			<input type="text" placeholder="ADMIN ID" name="a_id"><br>
			<input type="text" placeholder="FULL NAME" name="a_name"><br>
			<input type="text" placeholder="PASSWORD" name="a_pwd"><br>
			<input type="text" placeholder="CONTACT NO." name="a_phone"><br>
			<input type="text" placeholder="EMAIL ID" name="a_email"><br>
			<br><br><center><button type="submit" name="submit">SUBMIT</button></center>
		</form>
		</div>
		<?php
			if(isset($result)) {
				//echo $result;
			}
		?>
	</body>
</html>