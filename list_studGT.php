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
                            <li ><a href="update_carrymark.php">Update Carry Mark</a></li>
                            <li><a href="list_studG.php">List Student by Group</a></li>
                            <li class="selected-item"><a href="list_studGT.php">List Student by Group and Team Number</a></li>
                            <li><a href="modified_student.php">Modify Student Information</a></li>
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
				
				
				
				<form class="niceform" method="POST" action="list_studGT2.php">
	<fieldset>
		<dl>
			<h2><dt>Select Group</dt></h2>
			<dd><select name="groupid">
				<option value="1"> CS2514A </option>
				<option value="2"> CS2514B </option>
				<option value="3"> CS2514C </option>
			</select></dd>
		</dl><br />
		<dl>
			<h2><dt>Select Team Number</dt></h2>
			<dd><select name="team">
				<option value="1"> 1 </option>
				<option value="2"> 2 </option>
				<option value="3"> 3 </option>
				<option value="4"> 4 </option>
				<option value="5"> 5 </option>
				<option value="6"> 6 </option>
				<option value="7"> 7 </option>
				<option value="8"> 8 </option>
				<option value="9"> 9 </option>
				<option value="10"> 10 </option>
				<option value="11"> 11 </option>
				<option value="12"> 12 </option>
				<option value="13"> 13 </option>
				<option value="14"> 14 </option>
				<option value="15"> 15 </option>
			</select></dd>
		</dl>
		<dl class="submit"><br />
				<input class="NFButton" name="submit" type="Submit" value="with photo" />
				<input class="NFButton" name="submit_np" type="Submit" value="no photo" />
		</dl>	
	</fieldset>
</form>
	
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
