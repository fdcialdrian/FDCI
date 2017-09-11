<html>
	<head>
	<title>
		PRODUCT CONFIRMATION
	</title>
	</head>
	
	<body>
	<br />
		<?php
			//post values from activity2_user
		
		
			$p_id1=$_POST["p_id"];
			$product_id1=$_POST["product_id"];
			$product_name1=$_POST["product_name"];
			$description1=$_POST["description"];
			$type=$_POST["type"];
			$pcreated_date1=$_POST["pcreated_date"];
			$pmodified_date1=$_POST["pmodified_date"];
			$pcreated_ip1=$_POST["pcreated_ip"];
			$pmodified_ip1=$_POST["pmodified_ip"];
						
			
				$con=mysqli_connect("localhost",
									"FDCI",
									"fdci",
									"my_db");


					if(mysqli_connect_errno()) {
						
							print "FAILED TO CONNECT TO MY SQL";
					}
					
					
					$sql="INSERT INTO products(ID,
												PRODUCT_ID,
												NAME,
												DESCRIPTION,
												TYPE,
												CREATED_DATE,
												MODIFIED_DATE,
												CREATED_IP,
												MODIFIED_IP)
										
										
										VALUES ('$p_id1',
											'$product_id1',
											'$product_name1',
											'$description1',
											'$type',
											'$pcreated_date1',
											'$pmodified_date1',
											'$pcreated_ip1',
											'$pmodified_ip1')";


					if(!mysqli_query($con,$sql)) {
											die('error:');
					}
					
					print "<br />
						<table cellpadding= '4' width='100%'>
								<tr>
								<td bgcolor='black'>
						<center>
								<font size='7' color='white'><b>DATA SUCCESSFULY INSERTED</b></font>
						</center>
							</td>
								</tr>	
						</table>
					<br /><br /><br />";

				mysqli_close($con);
				
	
				?>
				
				<center>
				<br />
				<a href="activity2_products.php"> <u>BACK TO INSERT DATA UNDER PRODUCTS </u> </a>	
				<br /><br />
				<a href="activity2_home.php"> <u>GO BACK TO HOME </u> </a>	
				</center>
		
	
	</body>
</html>