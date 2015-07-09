<?xml version="1.0" encoding="ISO-8859-1" ?>
<xs:stylesheet version="1.0" xmlns:xs="http://www.w3.org/1999/XSL/Transform">
<xs:template match="/">
<html>
<head>
  <title>Students List</title>
<!--<SCRIPT FOR=document EVENT="onclick()">document.all.CalFrame.style.display="none";</SCRIPT>-->
  <link rel="stylesheet" href="mystyle.css" />
</head>
  <body>
	<center>
	<h2>Students List</h2>
		<table border= "1" align="center">
			<tr class="header">
				<th BGCOLOR="00ffff"> NAME </th>
				<th BGCOLOR="00ffff"> STUDENT ID </th>
				<th BGCOLOR="00ffff"> PASSWORD </th>
				<th BGCOLOR="00ffff"> IC NUMBER </th>
				<th BGCOLOR="00ffff"> GROUP </th>
				<th BGCOLOR="00ffff"> TEAM NUMBER </th>
				<th BGCOLOR="00ffff"> PROGRAMME </th>
				<th BGCOLOR="00ffff"> HP NUMBER </th>
				<th BGCOLOR="00ffff"> EMAIL </th>
				<th BGCOLOR="00ffff"> PHOTO </th>
				<th BGCOLOR="00ffff"> TESTS </th>
				<th BGCOLOR="00ffff"> ASSIGNMENTS </th>
				<th BGCOLOR="00ffff"> QUIZZES </th>
				<th BGCOLOR="00ffff"> PROJECTS </th>
				<th BGCOLOR="00ffff"> TOTAL MARKS </th>				
             </tr>
			<xs:for-each select="university/student">
			<tr>
				<td BGCOLOR="33FF00"><xs:value-of select="StudentName"/></td>
				<td BGCOLOR="33FF00"><xs:value-of select="StudentID"/></td>
				<td BGCOLOR="33FF00"><xs:value-of select="Password"/></td>
				<td BGCOLOR="33FF00"><xs:value-of select="IcNO"/></td>
				<td BGCOLOR="33FF00"><xs:value-of select="Group"/></td>
				<td BGCOLOR="33FF00"><xs:value-of select="Team"/></td>
				<td BGCOLOR="33FF00"><xs:value-of select="Programme"/></td>
				<td BGCOLOR="33FF00"><xs:value-of select="HandPhone"/></td>
				<td BGCOLOR="33FF00"><xs:value-of select="Email"/></td>
				<td BGCOLOR="33FF00" align="center"><img width="100px" length="100px">
				<xs:attribute name="src">uploads/<xs:value-of select="Photo"/></xs:attribute></img></td>				
				<td BGCOLOR="33FF00"><xs:value-of select="cm/test"/></td>
				<td BGCOLOR="33FF00"><xs:value-of select="cm/assign"/></td>
				<td BGCOLOR="33FF00"><xs:value-of select="cm/quiz"/></td>
				<td BGCOLOR="33FF00"><xs:value-of select="cm/proj"/></td>
				<td BGCOLOR="33FF00"><xs:value-of select="cm/total"/></td>				
            </tr>
			</xs:for-each>
		</table>
	</center>	
   </body>
</html>
</xs:template>
</xs:stylesheet>