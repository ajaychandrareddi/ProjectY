<?php 

	include("../includes/dbconnect.php");
	include("../includes/html_codes.php");
	
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Template</title>
  <meta charset="utf-8">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"> 
  
  <!-- BootstrapValidator CSS -->
  <link rel="stylesheet" href="../bootstrapValidator/css/bootstrapValidator.min.css">
  
  <!-- GoogleApis Jquery -->
  <script src="../googleapis/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
  <!-- Bootstrap JS -->
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  
  <!-- BootstrapValidator JS -->
  <script src="../bootstrapValidator/js/bootstrapValidator.min.js"></script>

  
  <!-- Local Use -->
  <script type="text/javascript" src="../js/header.js"></script>
  <script type="text/javascript" src="../js/loginValidation.js"></script>
  <script type="text/javascript" src="../js/registerValidation.js"></script>
  <link rel="stylesheet" href="../css/main.css">
  
</head>
<body>
  
<div class="container-fluid">
  	<?php headerAndSearchCode(); ?>
  
  	<?php footerCode(); ?>           
</div>

</body>
</html>
 