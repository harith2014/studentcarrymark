<?php
	session_start();
	$id = $_SESSION['id'];
    $name = $_SESSION['name'];	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>-::Student Carrymark System::-</title>
<link rel="stylesheet" href="styles.css" type="text/css" />


</head>

<body>
	<div id="wrapper">
		<div id="sitename">
			<h1><a href="#">ez-Mark System</a></h1>
		</div>
		<div id="header">
			<h2>Welcome to Student Carrymark System</h2>
			<div class="tagline"></div>
		</div>
		<div id="body" class="clear">
			<div id="sidebar" class="column-left">
				<ul>
                	<li>
						<h4>Navigate</h4>
                        <ul class="blocklist">
                            <li ><a href="lec_home.php">Home</a></li>
                            <li class="selected-item"><a href="update_carrymark.php">Update Carry Mark</a></li>
                            <li><a href="list_studG.php">List Student by Group</a></li>
                            <li><a href="list_studGT.php">List Student by Group and Team Number</a></li>
                            <li><a href="modified_student.php">Modify Student Information</a></li>
                            <li><a href="student.xml">List All Student</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>

					</li>	
					<li>
						
					</li>
					<li>
						
					</li>
				</ul>
			</div>
			<div id="content" class="column-right">
				<!-- CONTENT -->
				
				
				<h3>Update Carry Mark</h3>
				<fieldset>

					<legend>Student ID is required</legend>
					<form name="searchform" method="get" action="updateStud_cm2.php">
						<p><label for="name">Student ID:</label>
						<input type="text" name="StudentID" id="StudentID" value="" required autofocus/><br /></p>		
						<p><input name="Submit" type="submit" value="Submit" class="formbutton"/></p>
					</form>
	
				</fieldset>
	
				<p>&nbsp;</p>				
			</div>
		</div>
		<div id="footer" class="clear">
			<p class="left">&copy; 2010 sitename.</p>
			<p class="right"><a href="http://zypopwebtemplates.com/">Free CSS Templates</a> by ZyPOP</p>
		</div>
	</div>
</body>


</html>


