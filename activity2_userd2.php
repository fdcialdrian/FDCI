<html>
	<head>
	<title>
	DISPLAY SOME DATA IN USERS
	</title>
	</title>
	
		<body>
		<br />
		<table cellpadding= "4" width=100%>
			<tr>
				<td bgcolor="black">
				<center>
				<font size="7" color="white"><b>USER INFORMATION</b></font>
				</center>
				</td>
			</tr>	
			</table>
			<br /><br /><br />
			
		<?php
		
			$con=mysqli_connect("localhost",
								"FDCI",
								"fdci",
								"my_db");

				if(mysqli_connect_errno()){
					print "FAILED TO CONNECT TO MY SQL";
					}
					
				$result=mysqli_query($con,"select ID,FIRST_NAME,LAST_NAME from users");
				print
				"<table border='7' align='center' cellpadding='5'>
					<tr>
					<th>ID</th>
					<th>FIRST NAME</th>
					<th>LAST NAME</th>
					</tr>";
					
				while($userdata=mysqli_fetch_array($result)) {
				
				print"<tr>";
				print"<td>".$userdata['ID']."</td>";
				print"<td>".$userdata['FIRST_NAME']."</td>";
				print"<td>".$userdata['LAST_NAME']."</td>";
				print "</tr>";
				} print "</table>"
		?>
		
		
		<br /><br />
		
		<a href="activity2_home.php"> <u>GO BACK TO HOME </u> </a>
		</body>
		
</html>