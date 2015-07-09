<?php
if ($_GET["StudentID"] !=""){

	header('Location:lec_home.php'); 

	$newStudentID = $_GET["StudentID"];

	$dom = new DomDocument;
	$dom->preserveWhiteSpace=false;
	$dom->formatOutput=true;
	$dom->load("student.xml");

	// Locate the old product node to modify
	$xpath = new DOMXpath($dom);
	$nodelist = $xpath->query("/university/student[StudentID='$newStudentID']");

	$oldnode = $nodelist->item(0);

	// Remove
	$oldnode->parentNode->removeChild($oldnode);
   
	$dom->save("student.xml");//Done output XML
}
?> 