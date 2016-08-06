<?php

// header content here

echo "<div class='header_wrapper'>";


$page_name = $_SERVER['PHP_SELF'];
$addr_components = explode ("/", $page_name);


if ($addr_components[1] != "en")
{
	if ((isset($addr_components[2])) == false)
	{
		$lang_ref_en = '/en/';
	}
	if (((isset($addr_components[2])) == true)&&((isset($addr_components[3])) == false))
	{
		$lang_ref_en = '/en/'.$addr_components[1].'/';
	}
	if (((isset($addr_components[3])) == true)&&((isset($addr_components[4])) == false))
	{
		$lang_ref_en = '/en/'.$addr_components[1].'/'.$addr_components[2].'/';
	}
	if (((isset($addr_components[4])) == true)&&((isset($addr_components[5])) == false))
	{
		$lang_ref_en = '/en/'.$addr_components[1].'/'.$addr_components[2].'/'.$addr_components[3].'/';
	}
	if (((isset($addr_components[5])) == true)&&((isset($addr_components[6])) == false))
	{
		$lang_ref_en = '/en/'.$addr_components[1].'/'.$addr_components[2].'/'.$addr_components[3].'/'.$addr_components[4].'/';
	}
	if (((isset($addr_components[6])) == true)&&((isset($addr_components[7])) == false))
	{
		$lang_ref_en = '/en/'.$addr_components[1].'/'.$addr_components[2].'/'.$addr_components[3].'/'.$addr_components[4].'/'.$addr_components[5].'/';
	}
}
else if ($addr_components[1] == "en")
{
	if ((isset($addr_components[3])) == false)
	{
		$lang_ref_ru = '/';
	}
	if (((isset($addr_components[3])) == true)&&((isset($addr_components[4])) == false))
	{
		$lang_ref_ru = '/'.$addr_components[2].'/';
	}
	if (((isset($addr_components[4])) == true)&&((isset($addr_components[5])) == false))
	{
		$lang_ref_ru = '/'.$addr_components[2].'/'.$addr_components[3].'/';
	}
	if (((isset($addr_components[5])) == true)&&((isset($addr_components[6])) == false))
	{
		$lang_ref_ru = '/'.$addr_components[2].'/'.$addr_components[3].'/'.$addr_components[4].'/';
	}
	if (((isset($addr_components[6])) == true)&&((isset($addr_components[7])) == false))
	{
		$lang_ref_ru = '/'.$addr_components[2].'/'.$addr_components[3].'/'.$addr_components[4].'/'.$addr_components[5].'/';
	}
	if (((isset($addr_components[7])) == true)&&((isset($addr_components[8])) == false))
	{
		$lang_ref_ru = '/'.$addr_components[2].'/'.$addr_components[3].'/'.$addr_components[4].'/'.$addr_components[5].'/'.$addr_components[6].'/';
	}
}


if ($addr_components[1] != "en")
{
	$lang_string = "<a>Русская версия</a> / <a href='".$lang_ref_en."'>English version</a>";
	$website_preview_version = "Предварительная версия сайта (пока подглючивает)";
	$welcome_to_website = "Добро пожаловать на сайт &quot;my-vocabulary.ru&quot;";
}
else if ($addr_components[1] == "en")
{
	$lang_string = "<a href='".$lang_ref_ru."'>Русская версия</a> / <a>English version</a>";
	$website_preview_version = "Website preview version (there are some glitches so far)";
	$welcome_to_website = "Welcome to website &quot;my-vocabulary.ru&quot;";
}

echo	"
			<p>
				<span style='color: #f00;'>".$website_preview_version."</span>
				<br>
				".$lang_string." 
				<br> 
				<a href='".$DB1_to_home_page_link."'>".$DB1_to_home_page."</a> / <a href='".$DB2_information_link."'>".$DB2_information."</a> / <a href='".$DB3_addition_program_link."'>".$DB3_addition_program."</a> / <a href='".$DB4_word_list_link."'>".$DB4_word_list."</a> / <a href='".$DB5_registration_link."'>".$DB5_registration."</a> / <a href='".$DB8_login_link."'>".$DB8_login."</a> / <a href='".$DB6_account_management_link."'>".$DB6_account_management."</a>
			</p>
	
			"; 




echo "</div>"; // 'header_wrapper' closed

?>



