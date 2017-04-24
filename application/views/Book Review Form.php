<!DOCTYPE html>
<html>
<head>
	<title>Review</title>
</head>
<body>
	<?php  
		$Name = $Review = "";
		$Vote = 0.0;
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  		$Name = validateInput($_POST["Name"]);
	  		$Review = validateInput($_POST["Review"]);
		}

		function validateInput($input){
			$input = trim($input);
			$input = stripslashes($input);
			$input = filter_var($input, FILTER_SANITIZE_STRING);
			return $input;
		}
	?>
	<form method="POST" action="">
		Name: <input type="text" name="Name">
		<br><br>
		Review: <textarea name="Review" rows="5" cols="50" required></textarea> 
		<br><br>
		<input type="submit" name="submit">
	</form>
	<?php 
		echo "Your input:" . "<br>";
		echo $Name . "<br>" . $Review; 
	?>
</body>
</html>