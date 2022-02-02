<!DOCTYPE html>
<html>
<head>
  <title>Welcome to Dr. Park's Networks Course</title>
  <link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace|Raleway:100,500,600,800" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$fn = $_POST['firstname'];
		$ln = $_POST['lastname'];
		$state  = $_POST['state'];
		$name = '';
		$time = time() + 3600 * 24 * 30; 
	 	if(!empty($fn) && isset($ln)) {
			$name = $fn." ".$ln;
			setcookie("name", $name, $time, "/"); 
		}
		if(isset($state)) {
			setcookie("state", $state, $time, "/"); 
		}
	}
  ?>
</head>
<body >

  <div class="header">
    <h1>Understanding Networked Applications</h1>
  </div>

  <div class="overview">
	<h3>Thank <?php echo $name; ?></h3>
	<p> We do care about your business </p>
  </div>
  <div class="overview">
		  <h2> <a href="http://networks-s2022.com/"> Home </a> </h3>
</body>
</html>
