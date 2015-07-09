<html><title>Student Control Panel</title></html>
<?php
	session_start();
	print $id = $_SESSION['id'];	
?>

<h2 align="middle">Welcome To Student Details</h2>

<?php if(isset($_SESSION['name'])) {echo $_SESSION['name'];} else {echo "Guest";}?>

<br><br><?php if(isset($_SESSION['name'])) { ?><a href="logout.php" class="logout">Logout</a><?php }?>


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
		<center>
		<table id="rounded-corner" width="500">
		 <thead>
		<tr>
        	<th scope="col" class="rounded-company">Full Name</th>
            <th scope="col" class="rounded">Student ID</th>
			 <th scope="col" class="rounded">Password</th>
            <th scope="col" class="rounded">IC Number</th>
            <th scope="col" class="rounded">Group</th>
            <th scope="col" class="rounded">Team Number</th>
			<th scope="col" class="rounded">Programme</th>
            <th scope="col" class="rounded">Hand Phone</th>
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
			
			

		
		  <!--
		  <tr>
			<th scope="col" class="rounded-company" width="150">Full Name</th>
			<th scope="col" class="rounded-company" width="350"><?php echo $student[0]->StudentName;?></th>
		  </tr>
		  <tr>
			<td>Student ID</td>
			<td><?php echo $student[0]->StudentID;?></td>
		  </tr>
		  <tr>
			<td>Password</td>
			<td><?php echo $student[0]-->Password;?></td>
		  </tr>	
		  <tr>
			<td>IC Number</td>
			<td><?php echo $student[0]->IcNO;?></td>
		  </tr>
		  <tr>
			<td>Group</td>
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
			<td>HP Number</td>
			<td><?php echo $student[0]->HandPhone;?></td>
		  </tr>
		  <tr>
			<td>Email</td>
			<td><?php echo $student[0]-Email;?></td>
		  </tr>
		  <tr>
			<td>Photo</td>
			<td><img width="100px" length="100px" src="uploads/<?php echo $student[0]->Photo;?>"/></td>
		  </tr>-->
</tbody>
</table>
  
  <a href="stud_update.php">Update Profile</a>
  
<center>
		<table id="rounded-corner" width="500">
		 <thead>
		<tr>
        	<th scope="col" class="rounded-company">Quiz</th>
            <th scope="col" class="rounded">Test</th>
			 <th scope="col" class="rounded">Assignment</th>
            <th scope="col" class="rounded">Project</th>
            <th scope="col" class="rounded">Total</th>
        </tr>
		 </thead>
		<tbody>
			<tr>
        	<td><?php echo $student[0]->cm->quiz;?></td>
            <td><?php echo $student[0]->cm->test;?></td>
			<td><?php echo $student[0]->cm->assign;?></td>
            <td><?php echo $student[0]->cm->proj;?></td>
			<td><?php echo $student[0]->cm->total;?></td>
			</tr>
			
		</tbody>	
	
	 <!--
		  <tr>
			<th scope="col" class="rounded-company" width="150">Full Name</th>
			<td scope="col" class="rounded-company" width="350">
			<td>Quizzes</td>
			<td><?php echo $student[0]->cm->quiz;?></td>
		  </tr>
		  <tr>
			<td>Test</td>
			<td><?php echo $student[0]->cm->test;?></td>
		  </tr>
		  <tr>
			<td>Assignment</td>
			<td><?php echo $student[0]->cm->assign;?></td>
		  </tr>	
		  <tr>
			<td>Project</td>
			<td><?php echo $student[0]->cm->proj;?></td>
		  </tr>
		  <tr>
			<td>Total</td>
			<td><?php echo $student[0]->cm->total;?></td>
		  </tr>-->
		  
		 </thead>
</table>

<a href="studLogin.php">Back</a>
	<?php }
	}?>