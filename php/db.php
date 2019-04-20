<?php
    $connect = mysqli_connect('localhost', 'mysql', 'mysql', 'ats');

    if($connect == false)
    {
    	echo "Не удалось подключиться к базе данных!";
    }
?>