<html>
<title>Update Carry Mark</title>
</html><head>
<script type="text/javascript">
function sum()
{
		var num1 = document.myform.quiz.value;
		var num2 = document.myform.test.value;
		var num3 = document.myform.assign.value;
		var num4 = document.myform.proj.value;
		var sum = parseInt(num1) + parseInt(num2) + parseInt(num3) + parseInt(num4);
		document.getElementById('add').value = sum;
}
</script>
</head>


<?php
if (isset($_GET['StudentID']) !=''){
	$StudentID = $_GET['StudentID'];
    $xml = simplexml_load_file("student.xml");
      $student = $xml->xpath("//*[StudentID=$StudentID]");   
	 	
?>
<form name="myform" method="post" action="updateStud_cm.php">
<table width="500" border="1">
		<tr>
			<td width="150">Full Name</td>
			<td width="350"><input type="hidden" name="StudentName" value="<?php echo $student[0]->StudentName;?>"/><?php echo $student[0]->StudentName;?></td>
		</tr>
		<tr>
			<td>Student ID</td>
			<td><input type="hidden" name="StudentID" value="<?php echo $student[0]->StudentID;?>"/><?php echo $student[0]->StudentID;?></td>
		</tr>

	</table>

<table width="324" border="1">
  <tr>
    <td width="61">Quiz</td>
    <td width="247"><input type="text" name="quiz" value="<?php echo $student[0]->cm->quiz;?>"/></td>
  </tr>
  <tr>
    <td>Tests</td>
    <td><input type="text" name="test" value="<?php echo $student[0]->cm->test;?>"/></td>
  </tr>
  <tr>
    <td>Assignment</td>
    <td><input type="text" name="assign" value="<?php echo $student[0]->cm->assign;?>"/></td>
  </tr>
  
  <tr>
	<td>Project</td>
	<td><input type="text" name="proj" value="<?php echo $student[0]->cm->proj;?>"/></td>
  </tr>
  
	<tr>
		<td colspan="3" style="text-align:center;">
			<td><input type="button" name="button" value="Calculate" onclick="sum()"/></td>
	</tr>	
	
     <tr>
		<td>Total</td>
		<td><input type="text" id="add" name="total" value="<?php echo $student[0]->cm->total;?>"/></td>
	</tr>
	
  	<tr>
			<td colspan="2"><input type="submit" name="update" id="update" value="update" onclick="update()" /></td>
		</tr>
	

	</table>
  </form>  
    
</body>


<?php }?>

<?php
if (isset($_POST['StudentID'])!='' && (isset($_POST['update'])!='')){
	
	header('Location:student.xml'); 
	
	$newStudentName = $_POST['StudentName']; 
    $newStudentID = $_POST['StudentID'];
	
	$newTest = $_POST['test'];
	$newQuiz = $_POST['quiz'];
	$newAssig = $_POST['assig'];
	$newProj = $_POST['proj'];
	$newTotal = $_POST['total'];

	$file = "student.xml"; 
	$xml=simplexml_load_file($file);
	
	foreach ($xml->xpath("//*[StudentID=$newStudentID]") as $desc) 
	{
		$desc->StudentName = $newStudentName;					
		$desc->StudentID = $newStudentID;
		$desc->cm->test = $newTest;
		$desc->cm->quiz = $newQuiz;
		$desc->cm->assig = $newAssig;
		$desc->cm->proj = $newProj;
		$desc->cm->total = $newTotal;
	} 
	
	file_put_contents($file, $xml->asXML());
}
?> 