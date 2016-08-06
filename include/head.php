<?php

echo	"
			<!DOCTYPE html>
			<html>
			<head>
			
				<meta charset='utf-8'>
				<meta name='viewport' content='width=device-width, initial-scale=1'>
				
				<title>
		";		
					include $_SERVER['DOCUMENT_ROOT'].'/include/DB_queries.php';
					include $_SERVER['DOCUMENT_ROOT'].'/handlers/TITLE_HANDLER.php'; 
echo	"
				</title>
				
				<link rel='stylesheet' href='/css/index.css'>
				<!--<link rel='stylesheet' href='/css/bootstrap.css'>-->
				
				<link rel='shortcut icon' href='/images/favicon.ico'>
				
				<script type='text/javascript' src='/js/jquery-1.12.2.min.js'></script>
				<script type='text/javascript' src='/js/index.js'></script>
				<!--<script type='text/javascript' src='/js/bootstrap.js'></script>-->
				
			</head>
		";

?>