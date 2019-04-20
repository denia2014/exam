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
		<div class="out__abonent">
			
		</div>
	</main>
	<script src="js/jquery-3.2.1.min.js"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"></script>   
		<script src="js/libs/template7.min.js"></script>
		<script src="js/main.js"></script>		
		<script id="template-card_abonent" type="text/template7">
			{{#each abonent}}
				<div class="aboent">
					<div class="name__ab">
					<p class="name">ФИО: {{fio}}</p>
					</div>
					<div class="style__tel">
					<div class="tel">Тел: {{tel}}</div>
					</div>
					<div class="style__adres">
					<div class="cost">Адрес: {{adres}}</div>
					</div>	
				</div>
			{{/each}}
		</script>
</body>
</html>