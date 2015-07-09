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
                            <li ><a href="lec_home.php">Home</a></li>
                            <li ><a href="update_carrymark.php">Update Carry Mark</a></li>
                            <li class="selected-item"><a href="list_studG.php">List Student by Group</a></li>
                            <li><a href="list_studGT.php">List Student by Group and Team Number</a></li>
                            <li><a href="modified_student.php">Modify Student Information</a></li>
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
			//------function call------------

		
                      	if (isset($_POST["submit"]) !=""){
			          view_photo();
			         }

			else if (isset($_POST["submit_np"]) !=""){
			 no_photo();
			}
                
				function view_photo(){
				
				$groupNum = $_POST["groupid"];
		     	
                 
                
				$doc = new DomDocument();
				$doc->preserveWhiteSpace = false;
				$doc->formatOutput = true;
				
				$doc->load("student.xml");

				$xpath = new DOMXpath($doc);
				$list = $xpath->query("/university/student[groupid=$groupNum]");
				
					echo'<table border =1>'; 
					echo'<tr>';
						echo'<th>Name</th>';
						echo'<th>ID</th>';
						echo'<th>NRIC</th>';
						echo'<th>Group</th>';
						echo'<th>Team Number</th>';
						
						echo'<th>HP Number</th>';
						echo'<th>Photo</th>';
					echo'</tr>';
					
					foreach($list as $value){
						echo '<tr>';
						echo'<td>';
							echo $value->childNodes->item(0)->nodeValue;
						echo '</td>';
						echo'<td>';
							echo $value->childNodes->item(1)->nodeValue;
						echo '</td>';
						echo'<td>';
							echo $value->childNodes->item(3)->nodeValue;
						echo '</td>';
						echo'<td>';
							echo $value->childNodes->item(5)->nodeValue;
						echo '</td>';
						echo'<td>';
							echo $value->childNodes->item(6)->nodeValue;
						echo '</td>';
						
						echo'<td>';
							echo $value->childNodes->item(8)->nodeValue;
						echo '</td>';
						
						echo'<td>';
							echo '<img src=uploads/'. $value->childNodes->item(10)->nodeValue .' width=80>';
						echo '</td>';
						echo'</tr>';
					}
				}//end function
				
					
				function no_photo(){
				
				$groupNum = $_POST["groupid"];
				
				$doc = new DomDocument();
				$doc->preserveWhiteSpace = false;
				$doc->formatOutput = true;
				
				$doc->load("student.xml");

				$xpath = new DOMXpath($doc);
				$list = $xpath->query("/university/student[groupid=$groupNum]");
				
					echo'<table border =1>'; 
					echo'<tr>';
						echo'<th>Name</th>';
						echo'<th>ID</th>';
						echo'<th>NRIC</th>';
						echo'<th>Group</th>';
						echo'<th>Team Number</th>';
						echo'<th>Programme</th>';
						echo'<th>HP Number</th>';
						echo'<th>Email</th>';
					echo'</tr>';
					
					foreach($list as $value){
						echo '<tr>';
						echo'<td>';
							echo $value->childNodes->item(0)->nodeValue;
						echo '</td>';
						echo'<td>';
							echo $value->childNodes->item(1)->nodeValue;
						echo '</td>';
						echo'<td>';
							echo $value->childNodes->item(3)->nodeValue;
						echo '</td>';
						echo'<td>';
							echo $value->childNodes->item(5)->nodeValue;
						echo '</td>';
						echo'<td>';
							echo $value->childNodes->item(6)->nodeValue;
						echo '</td>';
						echo'<td>';
							echo $value->childNodes->item(7)->nodeValue;
						echo '</td>';
						echo'<td>';
							echo $value->childNodes->item(8)->nodeValue;
						echo '</td>';
						echo'<td>';
							echo $value->childNodes->item(9)->nodeValue;
						echo '</td>';
						echo'</tr>';
					}
				}//end function
                
          
			?> 
				
				
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
