<?php
error_reporting(E_ALL ^ E_NOTICE);
// 	Set internal ecoding to utf-8
mb_internal_encoding("UTF-8");

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
	require_once('includes/validation.inc.php');

if (!$error) {
	require_once('includes/mail.inc.php');
}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kontaktformular - Vorlage</title>
<link href="css/form.css" type="text/css" rel="stylesheet" media="all">
	</head>
<body>
 <?php
 // Formular einbinden
	require_once("includes/form.inc.php");
 ?>
	<script src="js/jquery_3.2.1.min.js"></script>
	<script src="js/form.js"></script>
</body>
</html>