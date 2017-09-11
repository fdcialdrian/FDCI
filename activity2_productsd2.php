<html>
	<head>
	<title>
	DISPLAY SOME DATA IN USERS
	</title>
	</head>
	
		<body>
		<br />
		<table cellpadding= "4" width=100%>
			<tr>
				<td bgcolor="black">
				<center>
				<font size="7" color="white"><b>PRODUCT INFORMATION</b></font>
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
					
				$result=mysqli_query($con,"select ID,PRODUCT_ID,NAME from products");
				print
				"<table border='7' align='center' cellpadding='5'>
					<tr>
					<th>ID NUMBER</th>
					<th>PRODUCT ID</th>
					<th>PRODUCT NAME</th>
					</tr>";
					
				while($userdata=mysqli_fetch_array($result)) {
				
				print"<tr>";
				print"<td>".$userdata['ID']."</td>";
				print"<td>".$userdata['PRODUCT_ID']."</td>";
				print"<td>".$userdata['NAME']."</td>";
				print "</tr>";
				} print "</table>"
			
			?>	
				<br /><br />
		<a href="activity2_home.php"> <u>GO BACK TO HOME </u> </a>	
		</body>
		
</html>