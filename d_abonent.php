<?php
include 'php/db.php';
?>
<meta charset = "utf-8"> 
<?php
$Fio = $_POST['fio'];
$Tel = $_POST['phone'];
$Adres = $_POST['adress'];
 if(empty($Fio) or empty($Tel) or empty($Adres))
 {
   exit("Заполните все поля!");
 } 

else {
    $result = mysqli_query($connect, "SELECT * FROM abonent;");
    $sql = "INSERT INTO `abonent` (`fio`, `tel`, `adres`) VALUES ('$Fio', '$Tel', '$Adres');";
    echo $sql;
    $result = mysqli_query($connect, $sql) or die( mysqli_error($connect) );

    echo '<script language="JavaScript">window.location.href="index.php"</script>';

 } 
 

 ?>