<!DOCTYPE html>
<html lang="en">
<head>
	<title>HONOURS REGISTRATION</title>
</head>
<body>
	<center>
		<h1 style = "color:red;"><u>    WELCOME TO RCOEM HONOURS REGISTRATION PORTAL </u></h1>
		<form action="insert.php" method="post">
			<hr><hr>
<p>
			<label for="firstName"><b>First Name:</b></label>
			<input type="text" name="first_name" id="firstName" required>
			</p>

			
<p>
			<label for="lastName"><b>Last Name:</b></label>
			<input type="text" name="last_name" id="lastName" required>
			</p>

			
<p>
			<label for="Gender" required><b>Gender:</b></label>
			<input type="radio" name="gender" id="male "  value = " male " >Male
			<input type="radio" name="gender" id="female "  value = " female ">Female

			</p>

			



<p>
			<label for="City" ><b>City:</b></label>
			<select name = "city" id = "city" required>
				<option value = "Nagpur">Nagpur</option>
				<option value = "Mumbai">Mumbau</option>
				<option value = "New Delhi">New Delhi</option>
				<option value = " Chandigarh "> Chandigarh </option>
			</select>
			</p>

			
<p>
			<label for="emailAddress"><b>Email Address:</b></label>
			<input type="email" name="email" id="emailAddress" required>
			</p>

			<p>
			<label for="phone_no"><b>Phone_No:</b></label>
			<input type="number" name="phone_no" id="phone_no" required>
			</p>

			<input type="submit" value="Submit" >
		</form>

<hr><hr>

       <nav>
<h1>		<a href="table.php" style="color:fuschia;">See Registered candidates. </a>
</h1>	   </nav>

	</center>
</body>
</html>
