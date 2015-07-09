
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
				<h2>Register Form</h2>
                
                
<?php
if (isset($_GET["id"]) !=""){
	$StudentID = $_GET["id"];
    $xml = simplexml_load_file("student.xml");
      $student = $xml->xpath("//*[StudentID=$StudentID]");   
	 	if (count($student)>=1) {
	 $xml_string = '';
        while(list( , $node) = each($student))
        {
            $xml_string .= $node->asXML();
		}
?>
	<table id="rounded-corner" border="1">
		<thead>
		<tr>
        	<th scope="col" class="rounded-company">Full Name</th>
            <th scope="col" class="rounded">Student ID</th>
			<th scope="col" class="rounded">Password</th>
            <th scope="col" class="rounded">IC Number</th>
            <th scope="col" class="rounded">Group</th>
            <th scope="col" class="rounded">Team Number</th>
			<th scope="col" class="rounded">Programme</th>
            <th scope="col" class="rounded">HP Number</th>
            <th scope="col" class="rounded">Email</th>
            <th scope="col" class="rounded-q4">Photo</th>
        </tr>
		 </thead>
		<tbody>
			<tr>
        	<td><?php echo $student[0]->StudentName;?></td>
            <td><?php echo $student[0]->StudentID;?></td>
			<td><?php echo $student[0]->Password;?></td>
            <td><?php echo $student[0]->IcNO;?></td>
            <td><?php echo $student[0]->Group;?></td>
			<td><?php echo $student[0]->Team;?></td>
			<td><?php echo $student[0]->Programme;?></td>
			<td><?php echo $student[0]->HandPhone;?></td>
			<td><?php echo $student[0]->Email;?></td>
			<td><img width="100px" length="100px" src="uploads/<?php echo $student[0]->Photo;?>"/></td>
			</tr>	
		</tbody>
	</center>


<!--
<table width="500" border="1">
  <tr>
    <td width="150">Full Name</td>
    <td width="350"><?php echo $student[0]->StudentName;?></td>
  </tr>
  <tr>
    <td>Student ID</td>
    <td><?php echo $student[0]->StudentName;?></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><?php echo $student[0]->Password;?></td>
  </tr>
  <tr>
	<td>IC Number</td>
	<td><?php echo $student[0]->IcNO;?></td>
  </tr>
  <tr>
	<td>Group Number</td>
	<td><?php echo $student[0]->Group;?></td>
  </tr>
  <tr>
	<td>Team Number</td>
	<td><?php echo $student[0]->Team;?></td>
  </tr>
  <tr>
	<td>Programme</td>
	<td><?php echo $student[0]->Programme;?></td>
  </tr>
  <tr>
	<td>HP Number</td><
	<td><?php echo $student[0]->HandPhone;?></td>
  </tr>
  <tr>
	<td>Email</td>
	<td><?php echo $student[0]->Email;?></td>
  </tr>
  <tr>
	<td>Photo</td>
	<td><img width="100px" length="100px" src="uploads/<?php echo $student[0]->Photo;?>"/></td>
  </tr>
  -->
 
  <dl class="submit">
		<a href="modified_details.php?id=<?php echo $student[0]->StudentID;?>" class="bt_green"><span class="bt_green_lft"></span><strong>Update Student</strong><span class="bt_green_r"></span></a>
		<a href="lect_delete.php?id=<?php echo $student[0]->StudentID;?>" class="bt_red"><span class="bt_red_lft"></span><strong>Delete Student</strong><span class="bt_red_r"></span></a>
	</dl>

<?php
    }
	else
	{
	echo "No record found";	
	}
}
?> 

</body>
</html>