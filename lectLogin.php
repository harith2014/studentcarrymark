<html>
<head><title>Lecture Login Form</title></head>
</html>

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




<?php
//login.php

$error = false;
if(isset($_POST['login']))
{
	$username = preg_replace('/[^A-Za-z0-9]/', '', $_POST['id']);
	$password = ($_POST['pwd']);
	
	$file = "lecture.xml";
    $fp = fopen($file, "rb") or die("cannot open file");
    $str = fread($fp, filesize($file));
    $xml=new DOMDocument();
	$xml->formatOutput = true;
    $xml->preserveWhiteSpace = false;
	$xml->loadXML($str) or die("Error");
     
	
    $node= $xml->getElementsByTagName("lecture");
	
	foreach ( $node as $value)
	{	
		$user=$value->getElementsByTagName("LectureID")->item(0);
		$id = $user->nodeValue;
	
		$pass=$value->getElementsByTagName("LecturePassword")->item(0);
		$passw=$pass->nodeValue;
		
		$name=$value->getElementsByTagName("LectureName")->item(0);
		$fname=$name->nodeValue;	
		
		
		if($username == $id && $password == $passw)
		{		
			session_start();
			$_SESSION['id']=$username;
			$_SESSION['name']=$fname;
			
			header('Location: lec_home.php');
			die;
		}
			
	}
	
$error = true;
}
	
?>	
<center>
<h2>Please Login To Enter</h2>
<form method="post">
		
		<table border = 0>
			<tr>
				<td>LectureID<td>:</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Password</td><td>:</td>
				<td><input type="password" name="pwd"></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" name="login" id="submit" value="Login"/>
					<input type="reset" name="Reset" />
				</td>
			</tr>
			 <a href="index.php">Main Menu</a>
			
		</table>
		
		<?php
		if($error){
			if(empty($username) || empty($password)){
				echo "<script language='JavaScript'>alert('Empty Username or Password!');</script>";;
				$msg = 1;}
			else
				echo "<script language='JavaScript'>alert('Invalid username and/or password');</script>";
		}
		?>
</form>

</center>

<p>&nbsp;</p>				
			</div>
		</div>
		<div id="footer" class="clear">
			<p class="left">&copy; 2013 sitename.</p>
			<p class="right"><a href="http://zypopwebtemplates.com/">Designed</a> by CS251 UiTM Student</p>
		</div>
	</div>