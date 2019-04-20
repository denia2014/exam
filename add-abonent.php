<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Абоненты АТС</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<main>
		<div class="name__p">
			<div class="style__buttom">
        		<a href="add-abonent.php" class="reg">Добавить абонента</a>
    		</div>
			<p class="style__z"><br>Картотека абонентов АСТ</p>
		</div>
		<div class="cont">
			<form action="d_abonent.php" method="post">
	                <p class="Text_add">Добавление абонента<hr></p>
	             <div class="Fio">
	             <font color="black">ФИО:</font>
	             <input type="text" name="fio" maxlength="30"/>
	             </div>
	             <div class="tel__s">
	             <font color="black">Тел:</font>
	             <input type="text" name="phone" />
	             </div>
	             <div class="S__a">
	             <font color="black">Адрес:</font>
	             <input type="text" name="adress" />
	             </div>
	             <div class="Nobg">
	             <input type="submit" value="Добавить" />
	             </div>
	          
			</form>
		</div>
	</main>

</body>
</html>