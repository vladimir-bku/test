<?php

$page_name = $_SERVER['PHP_SELF'];
$addr_components = explode ("/", $page_name);

if (($page_name == "/index.php")||($page_name == "/en/index.php"))
{
	echo "Главная - Home"; // это "эхо" должно быть из таблицы базы данных
}

?>








