<html>
	<head>
	<title>
		USER CONFIRMATION
	</title>
	</head>
	
	<body>
	<br />
		<?php
			//post values from activity2_user
		
		
			$user_id1=$_POST["id"];
			$first_name1=$_POST["first_name"];
			$middle_name1=$_POST["middle_name"];
			$last_name1=$_POST["last_name"];
			$gender1=$_POST["gender"];
			$birthdate1=$_POST["birthdate"];
			$created_date1=$_POST["created_date"];
			$modified_date1=$_POST["modified_date"];
			$created_ip1=$_POST["created_ip"];
			$modified_ip1=$_POST["modified_ip"];
			
			
				$con=mysqli_connect("localhost",
									"FDCI",
									"fdci",
									"my_db");


					if(mysqli_connect_errno()) {
						
							print "FAILED TO CONNECT TO MY SQL";
					} 
					
					$sql="INSERT INTO users(ID,
												FIRST_NAME,
												MIDDLE_NAME,
												LAST_NAME,
												GENDER,
												BIRTHDAY,
												CREATED_DATE,
												MODIFIED_DATE,
												CREATED_IP,
												MODIFIED_IP)
										
										VALUES ('$user_id1',
											'$first_name1',
											'$middle_name1',
											'$last_name1',
											'$gender1',
											'$birthdate1',
											'$created_date1',
											'$modified_date1',
											'$created_ip1',
											'$modified_ip1')";


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
				<a href="activity2_home.php"> <u>GO BACK TO HOME </u> </a>	
				<br /><br />
				<a href="activity2_user.php"> BACK TO INSERT DATA UNDER USERS </a>
				</center>
	
	</body>
</html>