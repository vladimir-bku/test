<?php

// MAIN PAGE

$page_name = $_SERVER['PHP_SELF'];
$addr_components = explode ("/", $page_name);

if ($addr_components[1] != "en")
{
	echo	"
		
			<p>
				<a>Русская версия</a> / <a href='/en/'>English version</a>
			</p>
			
			<p>
				Страница находится в процессе разработки. Содержимое можно будет увидеть позже.
			</p>
			
			<p>
				<a href='/archives/smileys/'>Пока можно скачать смайлы</a>
			</p>
			
			<p>
				<a href='/vocabulary-program/'>Тест онлайн-программы для изучения слов</a>
			</p>

			"; 
}
else if ($addr_components[1] == "en")
{
	echo	"
			
			<p>
				<a href='/'>Русская версия</a> / <a>English version</a>
			</p>
			
			<p>
				The page is in the process of development. The content can be seen later.
			</p>
			
			<p>
				<a href='/archives/smileys/'>At the moment you can download smileys</a>
			</p>
			
			<p>
				<a href='/vocabulary-program/'>Online vocabulary learning program test</a>
			</p>
	
			"; 
}


?>


