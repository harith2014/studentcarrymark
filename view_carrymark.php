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
                            <li><a href="modified_detail.php">Modify My Personal Details</a></li>
                            <li class="selected-item"><a href="view_carrymark.php">View My Carrymark</a></li>
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
				<h2>Carry Mark</h2>

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
    
    <fieldset>

					<legend>Carry Mark</legend>
					<form  name="myform" method="post" action="updateStud_cm2.php">
						<p><label for="name">Name:</label>
						<?php echo $student[0]->StudentName;?><br /></p>		
						<p><label for="email">Student ID:</label>
						<?php echo $student[0]->StudentID;?><br /></p>
                        <p><label for="email">Quiz:</label>
						<?php echo $student[0]->cm->quiz;?><br /></p>
                        <p><label for="email">Test:</label>
						<?php echo $student[0]->cm->test;?><br /></p>
                        <p><label for="email">Assignment:</label>
						<?php echo $student[0]->cm->assign;?><br /></p>
                        <p><label for="email">Project:</label>
						<?php echo $student[0]->cm->proj;?><br /></p>
						<p><label for="hidden">Total:</label>
					<?php echo $student[0]->cm->total;?><br /></p>
                        
                        
						
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