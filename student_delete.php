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
                            <li><a href="update_carrymark.php">Update Carry Mark</a></li>
                            <li><a href="list_studG.php">List Student by Group</a></li>
                            <li><a href="list_studGT.php">List Student by Group and Team Number</a></li>
                            <li class="selected-item"><a href="modified_student.php">Modify Student Information</a></li>
                            
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
if (isset($_GET['StudentID']) !=''){
	$StudentID = $_GET['StudentID'];
    $xml = simplexml_load_file("student.xml");
      $student = $xml->xpath("//*[StudentID=$StudentID]");   
	 if(count($student)>=1)
    {
            $xmlstring = '';
        
            while(list(, $node)= each($student) )
            {
                $xmlstring .= $node -> asXML();
            } 	
?>					
				<h3>Register Form</h3>
				<fieldset>

					<legend>Personal Details</legend>
					<form method="post" action="student_delete2.php" enctype="multipart/form-data">
						<p><label for="name">Full Name:</label>
						<?php echo $student[0]->StudentName;?><br /></p>		
						<p><label for="email">Student ID:</label>
						<?php echo $student[0]->StudentID;?><br /></p>
                        <p><label for="name">IC Number:</label>
						<?php echo $student[0]->IcNO;?><br /></p>
                        <p><label for="name">Group:</label>
						<?php echo $student[0]->Group;?>
						<p><label for="name">Team:</label>
            				<?php echo $student[0]->Team;?>
                        <p><label for="name">Programme:</label>
						<?php echo $student[0]->Programme;?><br /></p>
                        <p><label for="name">HP Number:</label>
						<?php echo $student[0]->HandPhone;?><br /></p>
                        <p><label for="name">Email:</label>
						<?php echo $student[0]->Email;?><br /></p>
                        <p><label for="name">Photo:</label>
						<img width="100px" length="100px" src="uploads/<?php echo $student[0]->Photo;?>"/><br /></p>
						<input type="button" name="update" value="DELETE"  onclick="location.href='student_delete2.php?StudentID=<?php echo $student[0]->StudentID;?>'" />
                        <input type="button" name="back" value="BACK" onclick="location.href='view_student.php?StudentID=<?php	echo $student[0]->StudentID;?>'" />
						
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

else
{
    
    echo "<script language='JavaScript'>alert('Data is not found!');</script>";
    
    }

}
?>


	