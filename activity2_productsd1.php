<html>
	<head>
	<title>
	DISPLAY SOME DATA IN PRODUCTS
	</title>
	</head>
	
		<body>
		<br />
		
		
		<table cellpadding= "4" width=100%>
			<tr>
				<td bgcolor="black">
				<center>
				<font size="7" color="white"><b>PRODUCTS INFORMATION</b></font>
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

						if(mysqli_connect_errno()) {
							
							print "FAILED TO CONNECT TO MY SQL";
							}
						$result=mysqli_query($con,"select * from products");

						print
							"<table border='7' align='center' cellpadding='5'>
							<tr>
								<th>ID NUMBER</th>
								<th>PRODUCT ID</th>
								<th>PRODUCT NAME</th>
								<th>DESCRIPTION</th>
								<th>TYPE</th>
								<th>CREATED DATE</th>
								<th>MODIFIED DATE</th>
								<th>CREATED IP</th>
								<th>MODIFIED IP</th>
								</tr>";
								
						while($userdata=mysqli_fetch_array($result)){
								print"<tr>";
								print"<td>".$userdata['ID']."</td>";
								print"<td>".$userdata['PRODUCT_ID']."</td>";
								print"<td>".$userdata['NAME']."</td>";
								print"<td>".$userdata['DESCRIPTION']."</td>";
								print"<td>".$userdata['TYPE']."</td>";
								print"<td>".$userdata['CREATED_DATE']."</td>";
								print"<td>".$userdata['MODIFIED_DATE']."</td>";
								print"<td>".$userdata['CREATED_IP']."</td>";
								print"<td>".$userdata['MODIFIED_IP']."</td>";
								print "</tr>";
						} print "</table>"
		
		?>
		<br /><br />
			<a href="activity2_home.php"> <u>GO BACK TO HOME </u> </a>	
		</body>
		
</html>