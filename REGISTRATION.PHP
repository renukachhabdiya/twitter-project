<html>
	<head>
		<title>Sign up for Twitter</title>
	</head>
	<body>
	<center><font size="6" face="Verdana"><b>WELCOME TO THE TWITTER WORLD</b></font></center>

	
		<form action="regnewuser.php" method="post">
			<table border="0" align="center" width="60%" >
				<tr>
					
					<th colspan="3"><h2><font size="4" face="Verdana"><b>JOIN TWITTER WORLD</b></font></h2></th>
				</tr>
				<tr>
					<td align="Right">FIRSTNAME</td>
					<td colspan="2" ><input type="text" name="fname" value="" placeholder="Enter your first name"
					    required="true"></td>
				</tr>	
				<tr>
				<tr>
					<td align="Right">LASTNAME</td>
					<td colspan="2" ><input type="text" name="lname" value="" placeholder="Enter your last name"
					    required="true"></td>
				</tr>	
						
				<tr>
					<td align="Right">GENDER</td>
					<td><input type="radio" name="Gender" value="Male" required="true">Male
					<input type="radio" name="Gender" value="Female" required="true">Female</td>
				</tr>


				
				<tr>
					<td align="Right">EmailID</td>
					<td colspan="2" ><input type="text" name="email" value="" placeholder="Enter your ID" required="true">
					</td>
				</tr>	
				<tr>
					<td align="Right">MOBILE NO.</td>
					<td colspan="2" ><input type="text" name="contact" value="" placeholder="Enter your Phone Number"
					    required="true"></td>
				</tr>
				<tr>
					<td align="Right">USERNAME</td>
					<td colspan="2" ><input type="text" name="usname" value="" placeholder="Enter your user_id"
					    required="true"></td>
				</tr>	
				<tr>
					<td align="Right">PASSWORD</td>
					<td colspan="2" ><input type="password" name="Pwd" value="" placeholder="Enter your Password"
					    required="true"></td>
				</tr>
				
				
				<tr>
					<td colspan="3" align="center">
						<input type="submit" value="Sign up">
						<input type="submit" value="RESET">
					</td>
				</tr>			
			</table>
		</form>

	</body>
</html>
