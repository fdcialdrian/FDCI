<html>
	<head>
	<title>
	DATABASE 1 USER
	</title>
	</head>
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
			
		<fieldset>	
			<legend align="bottom">
					<font size="6"><b>PLEASE FILL IN DATA</b></font>
			</legend>
			
		<form action="activity2_userp.php" method="POST">	
		
			<table align="center" cellpadding="10">
				<tr>
					<td>
					ID NUMBER:
					</td>
					
					<td>
					<input type="text" name="id">
					</td>
				</tr>
			
				<tr>
					<td>
					FIRST NAME:
					</td>
					
					<td>
					<input type="text" name="first_name">
					</td>
					
					<td>
					MIDDLE NAME:
					</td>
					
					<td>
					<input type="text" name="middle_name">
					</td>
					
					<td>
					LAST NAME:
					</td>
					
					<td>
					<input type="text" name="last_name">
					</td>
								
				</tr>
				
				<tr>
					<td>
					GENDER:
					</td>
					
					<td>
					<select name="gender">
					<option value="MALE">MALE</option>
					<option value="FEMALE">FEMALE</option>
					</select>
					</td>
					
					<td>
					BIRTHDATE:
					</td>
					
					<td>
					<input type="text" name="birthdate">
					</td>
					
					<td>
					CREATED DATE:
					</td>
					
					<td>
					<input type="text" name="created_date">
					</td>
				</tr>
				
				<tr>
					<td>
					MODIFIED DATE:
					</td>					
					<td>
					<input type="text" name="modified_date">
					</td>					
					<td>
					CREATED IP:
					</td>
					<td>
					<input type="text" name="created_ip">
					</td>
					<td>
					MODIFIED IP:
					</td>
					<td>
					<input type="text" name="modified_ip">
					</td>
						
				</tr>
			
			</table>

			
		</fieldset>	
			
			<br />
			<br />
			<center>
			PLEASE CHECK ALL YOUR DATA BEFORE SUBMISSION
			<br /><br />
			<input type="submit" value="CLICK ME TO SUBMIT">
			</center>
			<br />
			<br />
			<a href="activity2_home.php"> <u>GO BACK TO HOME </u> </a>
		</body>
</html>