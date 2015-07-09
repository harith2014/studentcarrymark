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
                            <li ><a href="index.php">Home</a></li>
                            <li class="selected-item"><a href="register_stud.php">Sign Up Form</a></li>
                           
                            
                           
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
								
				<h3>Register Form</h3>
				<fieldset>

					<legend>Personal Details</legend>
					<form name="input" method="POST" action="register_stud.php" enctype="multipart/form-data">
						<p><label for="name">Full Name:</label>
						<input type="text" name="name" id="name" required="required" /><br /></p>		
						<p><label for="email">Student ID:</label>
						<input type="text" name="id" id="id" required="required"  /><br /></p>
                        <p><label for="name">Password:</label>
						<input type="password" name="pwd" id="name" required="required" /><br /></p>
                        <p><label for="name">IC Number:</label>
						<input type="text" name="nric" id="name" required="required" /><br /></p>
                        <p><label for="name">Group:</label>
						<select name="Group" >
            				<option value="CS2514A"> CS2514A </option>
            				<option value="CS2514B"> CS2514B </option>
            				<option value="CS2514C"> CS2514C </option></select><br /></p>
                        <p><label for="name">Team Number:</label>
						<select name="team">
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
            				<option value="15"> 15 </option></select><br />
                        <p><label for="name">Programme:</label>
						<input type="text" name="prog" id="name" required="required"  /><br /></p>
                        <p><label for="name">HP Number:</label>
						<input type="text" name="hp" id="name" required="required" /><br /></p>
                        <p><label for="name">Email:</label>
						<input type="email" name="email" id="name" required="required" /><br /></p>
                        <p><label for="name">Photo:</label>
						<input type="file" name="photo"/ required="required"><br /></p>
						
						<p><input type="submit" name="submit" class="formbutton" value="Send" /><input type="reset" class="formbutton" value="RESET"></p>
					</form>
	
				</fieldset>
	
				<p>&nbsp;</p>				
			</div>
		</div>
		<div id="footer" class="clear">
			<p class="left">&copy; 2013 sitename.</p>
			<p class="right"><a href="http://zypopwebtemplates.com/">Designed</a> by CS251 UiTM Student</p>
		</div>
	</div>
</body>
</html>

<?php 
if (isset($_POST['submit'])){

    header('Location:index.php'); 

    $xmldoc = new DOMDocument(); 
    $xmldoc -> load('student.xml'); 
 
    $newStudentName = $_POST['name']; 
    $newStudentID = $_POST['id']; 
    $newPassword = $_POST['pwd']; 
	$newIcNO = $_POST['nric'];
	
     if ($_POST['Group'] == 'CS2514A'){
	$newGroupid = '1';
	}
	if ($_POST['Group'] == 'CS2514B'){
	$newGroupid = '2';
	}
	if ($_POST['Group'] == 'CS2514C'){
	$newGroupid = '3';
	}
	
	$newGroup = $_POST['Group'];
    $newTeamNo = $_POST['team'];
	$newProgramme = $_POST['prog'];
	$newHandPhone = $_POST['hp'];
	$newEmail = $_POST['email'];
	
	if ($_FILES["photo"]["error"] > 0) {
		echo "Error: " . $_FILES['photo']['error'] . "<br>";
	} else {
		echo "Upload: " . $_FILES["photo"]["name"] . "<br>";
		echo "Type: " . $_FILES["photo"]["type"] . "<br>";
		echo "Size: " . ($_FILES["photo"]["size"] / 1024) . " kB<br>";
		echo "Stored in: " . $_FILES["photo"]["tmp_name"] . "<br>";
	}

	if (file_exists("uploads/" . $_FILES["photo"]["name"])) {
		echo $_FILES["photo"]["name"] . " already exists. ";
	} else {
		move_uploaded_file($_FILES["photo"]["tmp_name"], "uploads/" . $_FILES["photo"]["name"]);
		echo "Stored in: " . "uploads/" . $_FILES["photo"]["name"];
	}
 
$f = $xmldoc->createDocumentFragment();
$f->appendXML("
<student>
	<StudentName>".$newStudentName."</StudentName>
	<StudentID>".$newStudentID."</StudentID>
	<Password>".$newPassword."</Password>
	<IcNO>".$newIcNO."</IcNO>
    <groupid>".$newGroupid."</groupid>
	<Group>".$newGroup."</Group>
	<Team>".$newTeamNo."</Team>
	<Programme>".$newProgramme."</Programme>
	<HandPhone>".$newHandPhone."</HandPhone>
	<Email>".$newEmail."</Email>
	<Photo>".$_FILES["photo"]["name"]."</Photo>
	<cm>
		<test>0</test>
		<assign>0</assign>
		<quiz>0</quiz>
		<proj>0</proj>
		<total>0</total>
	</cm>
</student>
");
	
	$xmldoc->documentElement->appendChild($f);
	
	$xmldoc->save('student.xml'); 
}
?>
