<html>
	<head>
	<title>
	DATABASE 1 PRODUCTS
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
			
		<fieldset>	
			<legend align="bottom">
					<font size="6"><b>PLEASE FILL IN DATA</b></font>
			</legend>
			
		<form action="activity2_productsp.php" method="POST">	
		
			<table align="center" cellpadding="10">
				
				<tr>
					<td>
					ID NUMBER:
					</td>
					
					<td>
					<input type="text" name="p_id">
					</td>
				</tr>
			
				<tr>
					<td>
					PRODUCT ID:
					</td>
					<td>
					<input type="text" name="product_id">
					</td>
					<td>
					PRODUCT NAME:
					</td>
					<td>
					<input type="text" name="product_name">
					</td>
				
				</tr>
				
				<tr>
					<td>
					DESCRIPTION:
					</td>
					<td>
					<input type="text" name="description">
					</td>
					<td>
					TYPE:
					</td>
					<td>
					<?php
					
					/*
					food 1 - all the foods that can be taken directly, without cooking or mixing anything " for milk & choco powder. milk & choco powder is part of food 1"
					food 2 - all foods that will be cooked or mixed something like hot water to be taken "goods that are in canned or processed foods are part of food 2" 
					fresh - all foods that are frozen and must be cooked
					nonfood - all goods that are not food and disposable but animal foods and human supplements like vitamins are exemption
					dry goods - all goods that are not food but will last long like electronic etc.
					*/
					?>
					
					<select name="type">
					<option value="FOOD_1">FOOD 1</option> 
					<option value="FOOD_2">FOOD 2</option>
					<option value="FRESH">FRESH</option>
					<option value="NON_FOOD">NONFOOD</option>
					<option value="DRY_GOOD">DRY GOODS</option>
					</select>
					</td>
					<td>
					CREATED DATE:
					</td>
					<td>
					<input type="text" name="pcreated_date">
					</td>
				
				</tr>
				
				<tr>
					<td>
					MODIFIED DATE:
					</td>
					<td>
					<input type="text" name="pmodified_date">
					</td>
					<td>
					CREATED IP:
					</td>
					<td>
					<input type="text" name="pcreated_ip">
					</td>
					<td>
					MODIFIED IP:
					</td>
					<td>
					<input type="text" name="pmodified_ip">
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
		<br /><br />	
			</center>
		<a href="activity2_home.php"> <u>GO BACK TO HOME </u> </a>	
		</body>
</html>