<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
</head>
<body>
	<div>
	<?php
	if (isset($_POST['create'])){
		echo "user submitted";

	}
	?>
	</div>

<div>
	<form action="registratio.hp" method="post">
		<div class="container">
			<h1> Registration</h1>
			<p>Fill Up the form </p>

			<label for ="firstname"><b> First Name</b> </label> 
			<input type="text" name="firstname" required>
			

			<label for ="lastname"><b> Last Name</b> </label> 
			<input type="text" name="lastname" required>
			

			<label for ="email"><b> Email</b> </label> 
			<input type="email" name="email" required>
			

			<label for ="GamerId"><b> GamerId</b> </label> 
			<input type="text" name="gamerid" required>


			<label for ="password"><b>Password</b> </label> 
			<input type="password" name="password" required>
			
			<input type="submit" name="create" value="Sign Up">
			
		</div>
		
	</form>

</div>

</body>
</html>