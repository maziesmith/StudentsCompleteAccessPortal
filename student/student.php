<?php
session_start();
echo '<br>';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SCAP</title>
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
				if(isset($result2)) 
				{                           
					echo $result2;
				}
				?>
			</div>
			
			   
    <div id="body" class="width">

		

		<section id="content">

	    <article>
				
			
			<h2>Introduction to SCAP</h2>
			

           <blockquote><p>Student is the largest union in the study environment of a college, so it is hard for managing student related data. Especially, with respect of students class attendance,
			 the original hand-paper style is tedious methodology putting excessive strain on resources 
			required to manage situation of student attendance. Therefore, the design of student attendance 
			system based being taken digitally has significant reality meaning. It provides accurate information always.
			 Malpractices can be reduced. <br><br>A digitalized system SCAP ensures any-time access to data. 
			The data which is stored in the repository helps in taking intelligent decisions by the management. 
			There are custom search capabilities to aid in finding student information and working on student records. 
			This can make the system easier to navigate and to use maximizing the effectiveness of time and other resources. 
			The system not only can improve the work efficiency, student's study environment and development, but also can save human and material resources.
           	
		</blockquote></article>
	
		
</div>
	</body>
</html>