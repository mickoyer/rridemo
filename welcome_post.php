<html>

<style>
body {
    background-color: lightblue;
    font-family: verdana;
    font-size: 16px;
}

h2 {
    color: gray;
    text-align: center;
}

p {
    font-family: verdana;
    font-size: 16px;
}
input {
    font-family: verdana;
    font-size: 16px;
}
</style>

<body>

<?php

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	// define variables and set to empty values
	$name = $email = $type = $website = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	  $name = test_input($_POST["name"]);
	  $email = test_input($_POST["email"]);
	  $website = test_input($_POST["website"]);
	  $type = test_input($_POST["type"]);
	  $company = test_input($_POST["type"]);

	  $company = ($_POST['company']);

	  if ($type == 'employer') {

		if (file_exists($company)) {
			$file = fopen($company,"a");
			fwrite($file, "\"$name\", \"$email\", \"$website\", \"$type\", \"$company\"\n");
			fclose($file);
		}
		else {
			$file = fopen($company,"w");
			fwrite($file, "\"$name\", \"$email\", \"$website\", \"$type\", \"$company\"\n");
			fclose($file);
		}
	  }
	  else {
  
		if (file_exists($company)) {
		
			$contents = file_get_contents($company);
			
			$contents = str_replace($line, '', $contents);
			file_put_contents($company, $contents);
			
			$file = fopen($company,"a");
			fwrite($file, "\"$name\", \"$email\", \"$website\", \"$type\", \"$company\"\n");
			fclose($file);
		}
		else {
			$file = fopen($company,"w");
			fwrite($file, "\"$name\", \"$email\", \"$website\", \"$type\", \"$company\"\n");
			fclose($file);
		}
	  }
	}
?>

</body>
</html>