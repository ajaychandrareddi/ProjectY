<?php 

	include("../includes/dbconnect.php");
	include("../includes/html_codes.php");
	
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Template</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <link rel="stylesheet" href="../css/main.css">
  <script type="text/javascript" src="../js/registerValidation.js"></script>
</head>
<body>
  
<div class="container-fluid">
  	<?php headerAndSearchCode(); ?>
  
  	<?php footerCode(); ?>           
</div>

</body>
</html>
 