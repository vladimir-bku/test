<?php

echo 	"
			<p>
				<a href='/'>На главную</a>
			</p>
		";

if ($_POST['pswrd_subm']=="Выйти из режима просмотра")
{
 unset($_SESSION['admin']);
}

if ((($_POST['pswrd_subm'] != 'Продолжить')||($_POST['password'] != '12345'))&&($_SESSION['admin'] != 'admin'))
{
	echo	"
			<div style='margin-left: 10%;'>
			<br><br><br>
			<form id='login_check' action='' method='post'>
				Для просмотра страницы введите пароль:
				<input type='text' name='password'>
				<input type='submit' name='pswrd_subm' value='Продолжить'>
			</form>
			</div><br><br><br><br>
			";
			
		
}
if ($_POST['pswrd_subm'] == 'Продолжить')
{
	if ($_POST['password'] == '12345')
	{
		$_SESSION['admin'] = 'admin';
	}
	else if ($_POST['password'] != '12345')
	{	
			if ($_POST['password'] != '')
			{
				echo "<div style='margin-left: 10%; color: #F0283C;'><br> Неверно введен пароль: <span style='color: #5065F0;'>".$_POST['password']."</span></div>";
			}
			else if ($_POST['password'] == '')
			{
				echo "<div style='margin-left: 10%; color: #F0283C;'><br> Не введен пароль!</div>";
			}
	}
}


if (isset($_SESSION['admin']))
{
echo "

<h1>Здравствуйте, вы находитесь на тестовой странице!</h1>
<p>
(позже страница переедет на <a href='http://my-vocabulary.ru' target='_blank'>my-vocabulary.ru</a>)
</p><br>

<img src='/images/my-vocabulary-400px.png' alt='' style='width: 300px;'>

<p>
Список ваших слов/выражений:
</p>

Добавить слово/выражение: <span style='color: #f00;'>(эта часть не работает)</span>

<input type='text' name='foreign' placeholder='русское'>
<input type='text' name='russian' placeholder='иностранное'>
<input type='text' name='transcription' placeholder='транскрипция'>

<input type='submit' name='subm_button' value='Отправить'>



			<div style='margin-left: 10%;'>
			<br><br><br>
			<form id='database' action='' method='post'>
				Введите русское слово: <span style='color: green;'>(эта работает)</span>
				<input type='text' name='russian_w'>
				Введите иностранное слово:
				<input type='text' name='foreign_w'>
				Введите категорию слова:
				<input type='text' name='w_category'>
				<input type='submit' name='word_subm' value='Добавить'>
			</form>
			</div><br><br><br><br>



"; // end of whole page echo



$dbconn = mysqli_connect ("localhost", "vladimir96_dbase", "74mev4o0", "vladimir96_dbase");
if (!$dbconn) {
    die('Ошибка подключения (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
/*
if ($dbconn === false)
{
	echo "Error opening DB!<br><br>";
	exit(0);

	*/
else
{
	echo "DB access successful!<br><br>";
}


/* этот запрос (ниже) работает для MySQL на TimeWeb */
/* длину varchar нужно задавать в скобках, иначе не работает (всё равно он исопльзует из этой длины только необходимую часть - в отличие от char, использующего строго заданную длину) */
$sql = "create table vocabulary_table (
																		id serial,
																		`user` varchar (255),
																		`word category` varchar (255),
																		`russian` varchar (255),
																		`foreign` varchar (255),
																		`transcription` varchar (255),
																		`word status` varchar (255)
)";

if (mysqli_query($dbconn, $sql)) {
    echo "Table vocabulary_table created successfully<br><br>";
} else {
    echo "Error creating table: " . mysqli_error($dbconn) . "<br><br>";
}




/*
mysqli_query ($dbconn, 	"create table vocabulary_table 	(
																		id serial,
																		user varchar (30),
																		word_category varchar (30),
																		russian varchar (30),
																		foreign varchar (30),
																		transcription varchar (30),
																		word_status varchar (30)
																		);
										");
*/

/*if ($tblcreate === false)
{
	echo "Error creating table!<br><br>";
	exit(0);
}
else
{
	echo "Table vocabulary_table has been created!<br><br>";
}	*/

if ($_POST['word_subm'] == 'Добавить')		
	{	
		/*$query_add_lines2 = "insert into vocabulary_table 
								(`word category`,`russian`,`foreign`,`word status`) 
								values ('категория2','мышь','mouse','just added')";
		*/
		
		
		$cat = $_POST['w_category'];
		$rus = $_POST['russian_w'];
		$for = $_POST['foreign_w'];
		if ($_POST['w_category'] == '')
		{	
			$cat = 'базовая категория';
		}
		if ($_POST['russian_w'] == '')
		{	
			$rand1 = mt_rand(100000, 999999);
			$rus = $rand1;
		}
		if ($_POST['foreign_w'] == '')
		{
			$rand2 = mt_rand(100000, 999999);
			$for = $rand2;
		}
		$query_add_lines = "insert into vocabulary_table 
								(`word category`,`russian`,`foreign`,`word status`) 
								values ('".$cat."','".$rus."','".$for."','just added')";
		
		if (mysqli_query($dbconn, $query_add_lines))  
		{
			$select_all = "select * from vocabulary_table order by id";
			$qresult = mysqli_query($dbconn, $select_all);
			$row  = mysqli_fetch_all($qresult, MYSQLI_BOTH);	
			//print_r($c) . "<br><br>";
			foreach($row as $kk=>$vv)
				{	
					echo $vv['russian']." -> ".$vv['foreign']." (категория &laquo;".$vv['word category']."&raquo;)<br>";
				}	
		} 
		else 
		{
			echo "Error adding to table: " . mysqli_error($dbconn);
		}

		








/*
		mysqli_query($dbconn, $query_add_lines);  
		$qresult = mysqli_query($dbconn, 	"select * from vocabulary_table 
											;"
								);
		$c = pg_fetch_all($qresult);	
		foreach($c as $kk=>$vv)
			{
				echo $vv['russian']." -> ".$vv['foreign']." (категория ".$vv['word_category']."<br>";
			}	
			
			*/
			
			
	}	
					
						


mysqli_close($dbconn);

}


?>

</body>
</html>