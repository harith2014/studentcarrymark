
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
                            <li class="selected-item"><a href="update_carrymark.php">Update Carry Mark</a></li>
                            <li><a href="list_studG.php">List Student by Group</a></li>
                            <li><a href="list_studGT.php">List Student by Group and Team Number</a></li>
                            <li ><a href="modified_student.php">Modify Student Information</a></li>
                            <li><a href="student.xml">List All Student</a></li>
                            <li><a href="delete_info.php">Delete Student Information</a></li>
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


				<h3>Form</h3>
				<fieldset>

					<legend>Carry Mark</legend>
					<form  name="myform" method="post" action="updateStud_cm2.php">
						<p><label for="name">Name:</label>
						<input type="hidden" name="StudentName" id="StudentName" value="<?php echo $student[0]->StudentName;?>"/><?php echo $student[0]->StudentName;?><br /></p>		
						<p><label for="email">Student ID:</label>
						<input type="hidden" name="StudentID" id="StudentID" value="<?php echo $student[0]->StudentID;?>"/><?php echo $student[0]->StudentID;?><br /></p>
                        <p><label for="email">Quiz:</label>
						<select name="quiz" id="quiz">
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
            				</select><br /></p>
                        <p><label for="email">Test:</label>
						<select name="test" id="test">
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
            				<option value="16"> 16 </option>
            				<option value="17"> 17 </option>
            				<option value="18"> 18 </option>
            				<option value="19"> 19 </option>
            				<option value="20"> 20 </option>
            				</select><br /></p>
                        <p><label for="email">Assignment:</label>
						<select name="assign" id="assign">
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
                            
            				</select><br /></p>
                        <p><label for="email">Project:</label>
						<select name="proj" id="proj">
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
            				<option value="16"> 16 </option>
            				<option value="17"> 17 </option>
            				<option value="18"> 18 </option>
            				<option value="19"> 19 </option>
            				<option value="20"> 20 </option>
                            
            				</select>
						<p><label for="email">Total:</label><input type="button" name="button" value="Calculate" onClick="add()"/></td>
						<input type="text" name="total" id="total" value="<?php echo $student[0]->cm->total;?>"/><br /></p>
                        
                        
						<p><input type="submit" name="update" class="formbutton" id="update" value="update" onclick="update()"/></p>
					</form>
	
				</fieldset>
	
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


<script>function add(){
var a,b,c,d, e;
a=Number(document.getElementById("quiz").value);
b=Number(document.getElementById("test").value);
c=Number(document.getElementById("assign").value);
d=Number(document.getElementById("proj").value);
e= a + b + c + d ;
document.getElementById("total").value= e;
}</script>

<?php }

else
{
    
    echo "<script language='JavaScript'>alert('Data is not found!');</script>";
    
    }

}?>

<?php
if (isset($_POST['StudentID'])!='' && (isset($_POST['update'])!='')){
	
	header('Location:update_carrymark.php'); 
	
	$newStudentName = $_POST['StudentName']; 
    $newStudentID = $_POST['StudentID'];
	
	$newTest = $_POST['test'];
	$newQuiz = $_POST['quiz'];
	$newAssig = $_POST['assign'];
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
		$desc->cm->assign = $newAssig;
		$desc->cm->proj = $newProj;
		$desc->cm->total = $newTotal;
	} 
	
	file_put_contents($file, $xml->asXML());
}
?> 