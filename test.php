<? session_start ();   
if($_SESSION['admin_example'])
{
$info = 'Эта страница - пример!<br>
Если вы видите это текст, значит у вас активирована сессия $_SESSION[\'admin_example\'] <br>
И у данной сессии есть свои данные. Что были переданы в неё в index.php<br>
Теперь выйдите на странице <a href="index.php" target="_blank">index.php</a> и вернитесь сюда<br>
Здесь данные из $_SESSION[\'admin_example\'] : '.$_SESSION['admin_example'];
}
else
{
	echo 'У вас недостаточно прав для просмотра данной информации! ';
	echo '<html> <head> <meta http-equiv="Refresh" content="2; URL=index.php"> </head> <body> </body> </html>'; 
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>тестовая страница</title>
</head>
<body>
	<? echo $info; ?>
</body>
</html>