<!DOCTYPE HTML>
<html>
	<head>
		<title>	ss Hercules </title>
		<?php 
			require 'required scripts.php';
			 $root = $_SERVER["DOCUMENT_ROOT"]; 
			require $root.'mysite/menujs/script.php';
			
		 ?>
		 <meta charset="UTF-8">
		 <link rel="stylesheet" type="text/css" href="/mysite/css/style.css">
	</head>
	<body>
<?php 
	$language = isset($_GET['language']) ? $_GET['language'] : null;
	require 'header.php';
			require 'menu.php'; ?>
<div class="content">