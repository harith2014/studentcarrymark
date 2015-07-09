<?php
if (isset($_POST['StudentID'])!='' && (isset($_POST['update'])!='')){
	echo "<script language='JavaScript'>alert('Data is updated!');</script>";
	header('Location:view_student.php'); 
	
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






