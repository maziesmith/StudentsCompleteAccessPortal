<div class="width">
    		<ul id="nav">
        		<li class=""><a href="student.php">Home</a></li>
        		<li class=""><a href="viewme.php">View Profile</a></li>
        	    <li class=""><a class="fly" tabindex="1" href="#">Update</a>
					<ul class="dd">
						<li class="start selected"><a href="studentdetfill.php">Basic Details</a></li>
						<li class=""><a href="academicdetfill.php">Academic Details</a></li>
						<li class=""><a href="extracurriculardetfill.php">Other Details</a></li>
					</ul>
				</li>
         	   	<li><a href="sviewatt.php">View Attendance</a></li>
					<li><a class="fly" tabindex="1" href="#">View Teacher</a>
						<ul class="dd">
							<li><a href="viewteacher.php">By Name</a></li>
							<li><a href="subjteacher.php">By subject</a></li>
						</ul>
					</li>
					<li><a href="reqtranscript.php">Request Transcript</a></li>
					<li><a href="gettranscript.php">Get Transcript</a></li>
					<li><a href="../index.php">LOG OUT</a></li>
				</ul></div>
<marquee behavior="scroll" direction="left" scrollamount="15" onmouseover="this.stop();" ONMOUSEOUT="this.start();" BGCOLOR="#e4ff00"><?php
if(isset($_SESSION['msg1']))
{echo $_SESSION['msg1'];}
 ?></marquee>
 <br><br>
