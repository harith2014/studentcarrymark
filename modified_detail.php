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
                            <li ><a href="student_home.php">Home</a></li>
                            <li><a href="personal_detail.php">View My Personal Detalis</a></li>
                            <li class="selected-item"><a href="modified_detail.php">Modify My Personal Details</a></li>
                            <li><a href="view_carrymark.php">View My Carrymark</a></li>
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
			

				<?php
	if (isset($id)){
		$StudentID = $id;
		$xml = simplexml_load_file("student.xml");
		  $student = $xml->xpath("//*[StudentID=$id]");   
			if (count($student)>=1) {
		 $xml_string = '';
			while(list( , $node) = each($student))
			{
				$xml_string .= $node->asXML();
			}
	?>
    
    <h3>Update Profiles</h3>
				<fieldset>

					<legend>Personal Details</legend>
					<form method="post" action="modified_detail.php" enctype="multipart/form-data">
						<p><label for="name">Full Name:</label>
						<input type="hidden" name="StudentName" value="<?php echo $student[0]->StudentName;?>"/><?php echo $student[0]->StudentName;?><br /></p>		
						<p><label for="email">Student ID:</label>
						<input type="hidden" name="StudentID" value="<?php echo $student[0]->StudentID;?>"/><?php echo $student[0]->StudentID;?><br /></p>
                        <p><label for="email">Password:</label>
                        <input type="password" name="Password" value="<?php echo $student[0]->Password;?>"/>
                        <p><label for="name">IC Number:</label>
						<input type="text" name="IcNO" value="<?php echo $student[0]->IcNO;?>"/><br /></p>
                        <p><label for="name">Group:</label>
						<select name="Group">
		<option value="CS2514A" <?php if ($student[0]->Group == "CS2514A") echo 'selected="selected"'; ?>> CS2514A </option>
		<option value="CS2514B" <?php if ($student[0]->Group == "CS2514B") echo 'selected="selected"'; ?>> CS2514B </option>
		<option value="CS2514C" <?php if ($student[0]->Group == "CS2514C") echo 'selected="selected"'; ?>> CS2514C </option></select>
						<p><label for="name">Team:</label>
            				<select name="Team">
				<option value="1" <?php if ($student[0]->TeamNo == "1") echo 'selected="selected"'; ?>> 1 </option>
				<option value="2" <?php if ($student[0]->TeamNo == "2") echo 'selected="selected"'; ?>> 2 </option>
				<option value="3" <?php if ($student[0]->TeamNo == "3") echo 'selected="selected"'; ?>> 3 </option>
				<option value="4" <?php if ($student[0]->TeamNo == "4") echo 'selected="selected"'; ?>> 4 </option>
				<option value="5" <?php if ($student[0]->TeamNo == "5") echo 'selected="selected"'; ?>> 5 </option>
				<option value="6" <?php if ($student[0]->TeamNo == "6") echo 'selected="selected"'; ?>> 6 </option>
				<option value="7" <?php if ($student[0]->TeamNo == "7") echo 'selected="selected"'; ?>> 7 </option>
				<option value="8" <?php if ($student[0]->TeamNo == "8") echo 'selected="selected"'; ?>> 8 </option>
				<option value="9" <?php if ($student[0]->TeamNo == "9") echo 'selected="selected"'; ?>> 9 </option>
				<option value="10" <?php if ($student[0]->TeamNo == "10") echo 'selected="selected"'; ?>> 10 </option>
				<option value="11" <?php if ($student[0]->TeamNo == "11") echo 'selected="selected"'; ?>> 11 </option>
				<option value="12" <?php if ($student[0]->TeamNo == "12") echo 'selected="selected"'; ?>> 12 </option>
				<option value="13" <?php if ($student[0]->TeamNo == "13") echo 'selected="selected"'; ?>> 13 </option>
				<option value="14" <?php if ($student[0]->TeamNo == "14") echo 'selected="selected"'; ?>> 14 </option>
				<option value="15" <?php if ($student[0]->TeamNo == "15") echo 'selected="selected"'; ?>> 15 </option></select>
                        <p><label for="name">Programme:</label>
						<input type="text" name="Programme" value="<?php echo $student[0]->Programme;?>"/></p>
                        <p><label for="name">HP Number:</label>
						<input type="text" name="HandPhone" value="<?php echo $student[0]->HandPhone;?>"/><br /></p>
                        <p><label for="name">Email:</label>
						<input type="text" name="Email" value="<?php echo $student[0]->Email;?>"/></p>
                        <p><label for="name">Photo:</label>
						<img width="100px" length="100px" src="uploads/<?php echo $student[0]->Photo;?>"/></br><input type="file" name="Photo" value="<?php echo $student[0]->Photo;?>"/>
						
						<input type="submit" name="update" class="formbutton" value="update" />
					</form>
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
<?php }
	}?>
    
<?php
if (isset($_POST['StudentID'])!='' && (isset($_POST['update'])!='')){
	echo "<script language='JavaScript'>alert('Data is updated!');</script>";
	header('Location:student_home.php'); 
	
	$newStudentName = $_POST['StudentName']; 
    $newStudentID = $_POST['StudentID']; 
    $newPassword = $_POST['Password']; 
	$newIcNO = $_POST['IcNO'];
	
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
	$newTeamNo = $_POST['Team'];
	$newProgramme = $_POST['Programme'];
	$newHandPhone = $_POST['HandPhone'];
	$newEmail = $_POST['Email'];
	
	if ($_FILES["Photo"]["error"] > 0) {
		echo "Error: " . $_FILES['Photo']['error'] . "<br>";
	} else {
		echo "Upload: " . $_FILES["Photo"]["name"] . "<br>";
		echo "Type: " . $_FILES["Photo"]["type"] . "<br>";
		echo "Size: " . ($_FILES["Photo"]["size"] / 1024) . " kB<br>";
		echo "Stored in: " . $_FILES["Photo"]["tmp_name"] . "<br>";
	}

	if (file_exists("uploads/" . $_FILES["Photo"]["name"])) {
		echo $_FILES["Photo"]["name"] . " already exists. ";
	} else {
		move_uploaded_file($_FILES["Photo"]["tmp_name"], "uploads/" . $_FILES["Photo"]["name"]);
		echo "Stored in: " . "uploads/" . $_FILES["Photo"]["name"];
	}
	
	$file = "student.xml"; 
	$xml=simplexml_load_file($file); 
		foreach ($xml->xpath("//*[StudentID=$newStudentID]") as $desc) 
		{
			$desc->StudentName = $newStudentName;					
			$desc->StudentID = $newStudentID;
			$desc->Password = $newPassword;
			$desc->IcNO = $newIcNO;
            $desc->groupid =$newGroupid;
			$desc->Group = $newGroup;
			$desc->Team = $newTeamNo;
			$desc->Programme = $newProgramme;
			$desc->HandPhone = $newHandPhone;
			$desc->Email = $newEmail;
			$desc->Photo = $_FILES["Photo"]["name"];
		} 
	file_put_contents($file, $xml->asXML());
}
?>     