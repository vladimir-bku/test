<?php

echo	"
			<body>
				<div class='whole_page_wrapper'>
		";
					
					include $_SERVER['DOCUMENT_ROOT'].'/include/header.php';
					include $_SERVER['DOCUMENT_ROOT'].'/include/authentification.php';
					include $_SERVER['DOCUMENT_ROOT'].'/include/sidebar.php';
					include $_SERVER['DOCUMENT_ROOT'].'/handlers/MAIN_HANDLER.php';
					include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
echo 	"		
				</div>
			</body>	
			</html>
		";
?>