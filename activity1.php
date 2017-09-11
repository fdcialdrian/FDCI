<html>
	<head>
		<title>PROGRAMMING CODING RULE</title>
	</head>
			<body>
			<table cellpadding= "4" width=100%>
			<tr>
				<td bgcolor="black">
				<center>
				<font size="7" color="white"><b>ACTIVITY 1 OUTPUT</b></font>
				</center>
				</td>
			</tr>	
			</table>
			
			<br />
			<br />
			
			<fieldset>
				<legend align="bottom">
					<font size="6"><b>ACTIVITY 1.1</b></font>
				</legend>
			<?php
			// first problem
			?>
				
						<?php
						// print natural hello world
							print "Normal = HELLO WORLD" . "<br / >" . "<br / >";
						
						$hello=array("H", "E", "L", "L", "O", " ", "W", "O", "R", "L", "D");
						
						print "Reverse = ";
						for($i=10; $i>=0; $i--){
							
							print $hello[$i];
						}
						
						?>
					
				</fieldset>
				
				<br />
				<br />
				<br />
				
				<fieldset>
				<legend align="bottom">
					<font size="6"><b>ACTIVITY 1.2</b></font>
				</legend>
			<?php
			//second problem
			
					
					$fi=1;
					$f=0;
					print $f . " ". $fi . " ";
					for($fibon=2; $fibon<=30; $fibon++){
					
					print $fib=$f+$fi;
					print " ";
					
					$f=$fi;
					$fi=$fib;
					
					}
					?>
				</fieldset>
				
				<br />
				<br />
				<br />
				
				<fieldset>
				<legend align="bottom">
					<font size="6"><b>ACTIVITY 1.3</b></font>
				</legend>
				
			<?php
				// third problem
				$array1= array("alpha", "beta", "charlie", "delta", "foxtrot", "golf", "india");
				$array2= array("alpha", "charlie", "india", "hotel", "test");
			
			function Check(){
				global $array1;
				global $array2;
				
				foreach ($array1 as $val1){
					
					foreach ($array2 as $val2){
						if ($val1==$val2){
							
							print $val1." ";
						}
					}
				}
			
			}
			Check();
			?>
			</fieldset>
			
			<br />
			<br />
			<br />
			
			<fieldset>
				<legend align="bottom">
					<font size="6"><b>ACTIVITY 1.4</b></font>
				</legend>
		
			
			<?php
			
			print "To test the Data Type of a variable, used the gettype Function. Please see Examples" . "<br / >";
			print "gettype('Ian')=" . " " . gettype('Ian') . "<br / >"; 
			print "gettype(100)=" . " " . gettype(100) . "<br / >"; 
			print "gettype(100.100)=" . " " . gettype(100.100) . "<br / >"; 
			print "gettype(array(10))=" . " " .gettype(array(10)) . "<br / >"; 
			print "gettype(true)=" . " " . gettype(true) . "<br / >"; 
			
			
			?>
			</fieldset>
			</body>
		
</html>