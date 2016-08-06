<?php

$page_name = $_SERVER['PHP_SELF'];
$addr_components = explode ("/", $page_name);

if (($page_name == "/index.php")||($page_name == "/en/index.php"))
{
	require $_SERVER['DOCUMENT_ROOT'].'/handlers/index.php';
}

// vocabulary program page

if (($page_name == "/vocabulary-program/index.php")||($page_name == "/en/vocabulary-program/index.php"))
{
	require $_SERVER['DOCUMENT_ROOT'].'/handlers/vocabulary-program.php';
}



?>








