<?php
	session_start();
	include("../includes/html_codes.php");
	
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../vendor/bootstrapValidator/css/bootstrapValidator.min.css">
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../vendor/bootstrapValidator/js/bootstrapValidator.min.js"></script>

  
  <!-- Local Use -->
  <link rel="stylesheet" href="../css/main.css">
  <script type="text/javascript" src="../js/header.js"></script>
 
</head>
<body>  
	<div class="container-fluid">
	  	<?php headerCode(); ?>
	  
	  	<?php footerCode(); ?>           
	</div>
	<?php loginModalCode(); ?>
	<script src="../js/loginValidation.js"></script>
	<?php registerModalCode(); ?>
  	<script src="../js/registerValidation.js"></script> 
</body>
</html>