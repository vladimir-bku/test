<?php

// GENERAL DATABASE VARIABLES

$dbconn = mysqli_connect ("localhost", "root", "f9g4fb1PaQ", "personal_website");
	if (!$dbconn) {
		die('DB connection error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
	}

$db_item1 = 	"	select * from `menu` 
					where
					`id` = 1
				";
$db_item2 = 	"	select * from `menu` 
					where
					`id` = 2
				";
$db_item3 = 	"	select * from `menu` 
					where
					`id` = 3
				";
$db_item4 = 	"	select * from `menu` 
					where
					`id` = 4
				";
$db_item5 = 	"	select * from `menu` 
					where
					`id` = 5
				";				
$db_item6 = 	"	select * from `menu` 
					where
					`id` = 6
				";
$db_item7 = 	"	select * from `menu` 
					where
					`id` = 7
				";
$db_item8 = 	"	select * from `menu` 
					where
					`id` = 8
				";


$page_name = $_SERVER['PHP_SELF'];
$addr_components = explode ("/", $page_name);

$db_result1 = mysqli_query($dbconn, $db_item1);
$db_row1 = mysqli_fetch_all($db_result1, MYSQLI_BOTH);	
foreach($db_row1 as $dbk1=>$dbv1)
{	
	if ($addr_components[1] != "en")
	{
		$DB1_to_home_page =	$dbv1[1];
		$DB1_to_home_page_link = $dbv1[2];
		$DB1_home_page_title = $dbv1[4];
	}
	else if ($addr_components[1] == "en")
	{
		$DB1_to_home_page =	$dbv1[3];
		$DB1_to_home_page_link = "/en".$dbv1[2];
		$DB1_home_page_title = $dbv1[5];
	}
}

$db_result2 = mysqli_query($dbconn, $db_item2);
$db_row2 = mysqli_fetch_all($db_result2, MYSQLI_BOTH);	
foreach($db_row2 as $dbk2=>$dbv2)
{	
	if ($addr_components[1] != "en")
	{
		$DB2_information =	$dbv2[1];
		$DB2_information_link = $dbv2[2];
	}
	else if ($addr_components[1] == "en")
	{
		$DB2_information =	$dbv2[3];
		$DB2_information_link = "/en".$dbv2[2];
	}
}

$db_result3 = mysqli_query($dbconn, $db_item3);
$db_row3 = mysqli_fetch_all($db_result3, MYSQLI_BOTH);	
foreach($db_row3 as $dbk3=>$dbv3)
{	
	if ($addr_components[1] != "en")
	{
		$DB3_addition_program =	$dbv3[1];
		$DB3_addition_program_link = $dbv3[2];
	}
	else if ($addr_components[1] == "en")
	{
		$DB3_addition_program =	$dbv3[3];
		$DB3_addition_program_link = "/en".$dbv3[2];
	}
}

$db_result4 = mysqli_query($dbconn, $db_item4);
$db_row4 = mysqli_fetch_all($db_result4, MYSQLI_BOTH);	
foreach($db_row4 as $dbk4=>$dbv4)
{	
	if ($addr_components[1] != "en")
	{
		$DB4_word_list = $dbv4[1];
		$DB4_word_list_link = $dbv4[2];
	}
	else if ($addr_components[1] == "en")
	{
		$DB4_word_list =	$dbv4[3];
		$DB4_word_list_link = "/en".$dbv4[2];
	}
}

$db_result5 = mysqli_query($dbconn, $db_item5);
$db_row5 = mysqli_fetch_all($db_result5, MYSQLI_BOTH);	
foreach($db_row5 as $dbk5=>$dbv5)
{	
	if ($addr_components[1] != "en")
	{
		$DB5_registration = $dbv5[1];
		$DB5_registration_link = $dbv5[2];
	}
	else if ($addr_components[1] == "en")
	{
		$DB5_registration =	$dbv5[3];
		$DB5_registration_link = "/en".$dbv5[2];
	}
}

$db_result6 = mysqli_query($dbconn, $db_item6);
$db_row6 = mysqli_fetch_all($db_result6, MYSQLI_BOTH);	
foreach($db_row6 as $dbk6=>$dbv6)
{	
	if ($addr_components[1] != "en")
	{
		$DB6_account_management = $dbv6[1];
		$DB6_account_management_link = $dbv6[2];
	}
	else if ($addr_components[1] == "en")
	{
		$DB6_account_management =	$dbv6[3];
		$DB6_account_management_link = "/en".$dbv6[2];
	}
}

$db_result7 = mysqli_query($dbconn, $db_item7);
$db_row7 = mysqli_fetch_all($db_result7, MYSQLI_BOTH);	
foreach($db_row7 as $dbk7=>$dbv7)
{	
	if ($addr_components[1] != "en")
	{
		$DB7_database_management = $dbv7[1];
		$DB7_database_management_link = $dbv7[2];
	}
	else if ($addr_components[1] == "en")
	{
		$DB7_database_management =	$dbv7[3];
		$DB7_database_management_link = "/en".$dbv7[2];
	}
}

$db_result8 = mysqli_query($dbconn, $db_item8);
$db_row8 = mysqli_fetch_all($db_result8, MYSQLI_BOTH);	
foreach($db_row8 as $dbk8=>$dbv8)
{	
	if ($addr_components[1] != "en")
	{
		$DB8_login = $dbv8[1];
		$DB8_login_link = $dbv8[2];
	}
	else if ($addr_components[1] == "en")
	{
		$DB8_login = $dbv8[3];
		$DB8_login_link = "/en".$dbv8[2];
	}
}

	
mysqli_close($dbconn);
	
	
// ADDITIONAL NON-DATABASE VARIABLES below

?>




