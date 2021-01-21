<?php
/*class Tournament
{
	public function WhoWon($firstTeamGoals, $secondTeamGoals)
	{
		if ($firstTeamGoals > $secondTeamGoals)
		{
			return $firstTeam;
		}
		elseif ($firstTeamGoals < $secondTeamGoals)
		{
			return $secondTeam;
		}
		// else (if draw is possible)
	}
}
	*/

//require_once ('htmlTour.php');

function LoadNamesToDB($prekol)
{
	require_once ('htmlTour.php');
	// Фильтры для занесения в базу только НЕпустые значения
	$goals = array_filter( $_POST["goals"] ?? [], function($element)
	{
		return !empty($element);
	});
	$_POST["goals"] = [];

	$names = array_filter($_POST["name"] ?? [], function($element)
	{
		return !empty($element);
	});
	$_POST["name"] = [];

	//Объединение в один массив из имён/голов (ключей/значений)
	$goalsNnames = array_combine($names, $goals);

	if (!empty($names) && !empty($goals))
	{
		// Параметры для подключения
		$db_host = "localhost";
		$db_user = "student"; // Логин БД
		$db_password = "student"; // Пароль БД
		$db_base = 'dev'; // Имя БД
		$db_table = "team"; // Имя Таблицы БД

		// Подключение к базе данных
		$mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

		// Если есть ошибка соединения, выводим её и убиваем подключение
		if ($mysqli->connect_error)
		{
			die('Ошибка : ('.$mysqli->connect_errno.') '.$mysqli->connect_error);
		}

		//Заполняем таблицу именами, голами и ID матчей
		$matchID = 1;
		if ($prekol == 1)
		{
			$matchID = $matchID + 12;
		}

		$counter = 0;//Вспомогательная переменная для маркировки матчей
		foreach ($goalsNnames as $nameOfTeam => $goalsOfTeam)
		{
			$result = $mysqli->query("INSERT INTO ".$db_table." (name, goals) VALUES ('$nameOfTeam', '$goalsOfTeam')");
			$mysqli->query(" UPDATE ".$db_table." SET matchID= '$matchID' WHERE name='$nameOfTeam'");

			// Конструкция для маркировки матчей
			if ($counter == 0)
			{
				$counter = $counter - 1;
			}
			else
			{
				$matchID++;
				$counter++;
			}
		}

		if ($result == true)
		{
			echo "Информация занесена в базу данных <br>";

		}
		else
		{
			echo "Информация не занесена в базу данных";
		}
	}
$all = array($names,$goals); // Два массива из имён и голов
return $all;

}
$competitors = LoadNamesToDB(0);


//function WhoWon($numberOfMatch)
//{
//	$goals = $_POST["goals"];
//	$names = $_POST["name"];
//
//
//	if ($goals[1] > $goals[2])
//	{
//		$winner = $names[1];
//		return $winner;
//	}
//	else
//	{
//		$winner = $names[2];
//		return $winner;
//	}
//}
//$winner1 = WhoWon(1);
//echo $winner1;

function WhoWon($numberOfMatch)
{
	$connection = mysqli_init();
	$db_host = "localhost";
	$db_user = "student"; // Логин БД
	$db_password = "student"; // Пароль БД
	$db_base = 'dev'; // Имя БД
	//$db_table = "team"; // Имя Таблицы БД
	$connectionResult = $connection->real_connect($db_host,$db_user,$db_password,$db_base);


	if(!$connectionResult)
	{
		$error = $connection->connect_errno . ": " . $connection->connect_error;
		trigger_error($error, E_USER_ERROR);
	}
	$result = $connection->set_charset("utf8");
	if (!$result)
	{
		trigger_error($connection->error, E_USER_ERROR);
	}
	$query = "SELECT name,goals FROM team WHERE matchID='".$numberOfMatch."'";
	$result1 = $connection->query($query);

	$result2 = $result1->fetch_all();


	if ($result2[0][1] < $result[1][1])
	{
		return $result2[0][0];
	}
	else
	{
		return $result2[1][0];
	}

}

function WhoGoesSemi()
{

}


