<!DOCTYPE html>
<html>
	<head>
		<title>SCAP</title>
		<style>
			html,
			body 
			{
  				width: 100%;
  				height: 100%;
			}
			body 
			{
  				margin: 0 auto;
				display: table;
				text-align: center;
				font-family: 'Pontano Sans', Arial, Helvetica, sans-serif;
				max-width: 33em;
			}
			
			h1 
			{
				font-size: 22px;
				color: #222;
			}
			h1 span 
			{
  				font-weight: 300;
				
			}
			input[type=radio] { 
transform: scale(1.5, 1.5); 
-moz-transform: scale(1.5, 1.5); 
-ms-transform: scale(1.5, 1.5); 
-webkit-transform: scale(1.5, 1.5); 
-o-transform: scale(1.5, 1.5); 
}
			input[type=text],input[type=password]
			{
		  	    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;
    box-sizing: border-box;
    -webkit-box-sizing:  border-box;
    -moz-box-sizing: border-box;
    width: 60%;
    background: #fff;
    margin-bottom: 4%;
    border: 1px solid #ccc;
    padding: 3%;
    color: #555;
    font: 110% Arial, Helvetica, sans-serif;
			}
			input::-webkit-input-placeholder { 
		  	color: #00A0EB;}

			button[type=submit] 
			{
		    	box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 60%;
    padding: 3%;
    background: #00A0EB;
    border-bottom: 2px solid #30C29E;
    border-top-style: none;
    border-right-style: none;
    border-left-style: none;    
    color: #fff;
			}
			button[type=submit]:hover 
			{
    background: #0072A7;
}



		</style>



	</head>
	<body>
		<br><br><br><img src="login.png" alt="login" width="300" height="100">
		<br>
		<h1 class="text" id="welcome">Welcome to SCAP.<span><br>Please Login.</span></h1>


		<form method="POST" action="index.php">
			<br>
			<input type="radio" name="inis" value="student">Student&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="inis" value="teacher">Teacher&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="inis" value="admin">Admin<br>
			<p><input type="text" name="id" placeholder="Username"><br></p>
			<p><input type="password" name="pwd" placeholder="Password"><br></p>
			<p><button type="submit" name="submit">LOGIN</button></p>
			<br>
			</p><h4>
			<a href="new/newstudentdetfill.php">Sign up as student?</a>
			<a href="new/newteacherdetfill.php">Sign up as teacher?</a>
			<!--<a href="newadmindetfill.php">Sign up as admin?</a>-->
			</h4></p>
		</form>
	</body>
</html>
<?php
	session_start();
	if(isset($_POST['submit']))                                     
	{
		//echo "in";
		if(!$_POST['id'] || !$_POST['pwd'] || !$_POST['inis'])
		{
				echo '<script>alert("PLEASE FILL ALL DETAILS")</script>';							#checkin if user has put any inputs
		}
		else
		{
				$uid=$_POST['id'];                                          
				$upwd=$_POST['pwd'];												#storin it in variables
				$uini=$_POST['inis'];
				@$con=mysql_connect('localhost', 'root','');           				#connection statement       
				if($con) 												     
				{
					$sel=mysql_select_db('SCAP');									#if connctn exist select scap db
					if($uini=='student')
					{
						$query="select s_pwd from StudentDet where s_id='$uid'";	#searchin for pwd of nly the uid
						if($result=mysql_query($query)) 							          
						{
							
							$row=mysql_fetch_assoc($result);						#fetching the query
							$pwd=$row['s_pwd'];
							if($pwd==$upwd)
							{
								header('Location: student/student.php'); 
								$_SESSION['stype']=$uid;
							}   				 
							else
							{
								echo '<script>alert("INVALID CREDENTIALS")</script>';
								
							}
						}
						else{}	
					}
					else if($uini=='teacher')
					{
						$query="select t_pwd from TeacherDet where t_id='$uid'";
						if($result=mysql_query($query)) 							          
						{
							$row=mysql_fetch_assoc($result);
							$pwd=$row['t_pwd'];
							if($pwd==$upwd)
							{
								header('Location: teacher/teacher.php'); 
								$_SESSION['ttype']=$uid;
							}   				 
							else
							{ 
								echo '<script>alert("INVALID CREDENTIALS")</script>';
							}
						}
						else{}
					}
					else
					{
						if($uini=='admin')
						{
							$query="select a_pwd from AdminDet where a_id='$uid'";
							if($result=mysql_query($query)) 							          
							{
								$row=mysql_fetch_assoc($result);
								$pwd=$row['a_pwd'];
								if($pwd==$upwd)
								{
									header('Location: admin/admin.php'); 
									$_SESSION['atype']=$uid;
								}   				 
								else
								{ 
									echo '<script>alert("INVALID CREDENTIALS")</script>';
								}
							}
							else{
							}  
						}	
					}
				}else{echo "error while connecting";}	
				@mysql_close();
		}
	}
?>
