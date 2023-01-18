<!DOCTYPE html>
<html>
<head>
<title>webinar.ru</title>
<meta charset="utf-8" />
</head>
<body>
<h2>Вывод скрипта по заданию</h2>

<?php
$peremen = " ";
for ($i = 3306; $i <= 3310; $i++){
$conn = new mysqli("172.17.0.1", "root", "8hXI5MgIbqifZ", "webinar_bd", $i);
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT name, family FROM webinar JOIN webinarx ON webinar.id = webinarx.id WHERE webinar.id = FLOOR(RAND()*(10-1)*1);";
if($result = mysqli_query($conn, $sql)){
    while($row = mysqli_fetch_array($result)){
echo $row["name"] . $peremen . $row["family"] . $peremen . "from" . $peremen . gethostbyaddr('172.17.0.1:$i');
	}
}
$conn->close();
}

?>
</body>
</html>
