<!DOCTYPE html>
<html>
<head>
	<title>Php Basic Page</title>
</head>
<body>

	<h1>Php Basic</h1>

	<?php
		
		echo "<br>" ;

		 $fullNameErr = "";
		if($_SERVER['REQUEST_METHOD'] === "POST") {
				if (empty($_POST['N'])) {
					$fullNameErr = "value is empty";
				}
				else{
					echo test_input($_POST['N']);
			     }
		}

			

				echo "<br>";

			function test_input($data)
			{
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				  return $data;
			}
	?>
  
  

	<form action="<?Php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
		<label for="N">Name :</label>
		<input type="text" name="N" id="name">
		<span style="color: red;"><?php echo $fullNameErr; ?></span>

		<input type="submit" name="submit" value="submit">

	</form>


</body>
</html>