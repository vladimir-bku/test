<?php

// authentification check here



// authentification example

if ($_POST['psw_subm1']=="Выйти из режима просмотра")
	{
	 unset($_SESSION['admin']);
	}
	
	if ((($_POST['psw_subm'] != 'Продолжить')||($_POST['password'] != '12345'))&&($_SESSION['admin'] != 'admin'))
	{
		echo	exit ("
				<div style='margin-left: 10%;'>
				<br><br><br>
				<form id='login_check' action='' method='post'>
					Для просмотра страницы введите пароль:
					<input type='text' name='password'>
					<input type='submit' name='psw_subm' value='Продолжить'>
				</form>
				</div>
				");
	}
	if ($_POST['psw_subm'] == 'Продолжить')
	{
		if ($_POST['password'] == '12345')
		{
			$_SESSION['admin'] = 'admin';
		}
		else if ($_POST['password'] != '12345')
		{	
				if ($_POST['password'] != '')
				{
					exit ("<div style='margin-left: 10%; color: #F0283C;'><br> Неверно введен пароль: <span style='color: #5065F0;'>".$_POST['password']."</span></div>");

				}
				else if ($_POST['password'] == '')
				{
					exit ("<div style='margin-left: 10%; color: #F0283C;'><br> Не введен пароль!</div>");
				}
		}
	}



?>