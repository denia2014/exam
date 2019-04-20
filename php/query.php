<?php
	require_once "connection.php";

	$connection = mysqli_connect($host, $login, $password, $database);

	if(!$connection) {
		echo 'Ошибка подключения к БД: '.mysqli_connect_error();
		exit;
	}

	$data = array();

	$query = $_POST['query'];
	$result = mysqli_query($connection, $query);

	if($result) {
		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}

		echo json_encode($data);

		mysqli_free_result($result);
	}

	mysqli_close($connection);
?>