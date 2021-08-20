<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" ) {
if ($_FILES['profilepic']['error'] == UPLOAD_ERR_OK && $_FILES['profilepic']['type'] == 'image/jpeg') { // Проверяем на наличие ошибок
$destiation_dir = dirname(__FILE__) . '/' . $_FILES['profilepic']['name']; // Директория для размещения файла
if (move_uploaded_file($_FILES['profilepic']['tmp_name'], $destiation_dir)) { // Перемещаем файл в желаемую директорию
echo 'Profile Pic Uploaded'; // Оповещаем пользователя об успешной загрузке файла
} else {
echo 'Profile Pic not uploaded';
}
} else {
switch ($_FILES['profilepic']['error']) {
case UPLOAD_ERR_FORM_SIZE:
case UPLOAD_ERR_INI_SIZE:
echo 'Profile Pic Size exceed';
brake;
case UPLOAD_ERR_NO_FILE:
echo 'Profile Pic Not selected';
break;
default:
echo 'Something is wrong with Profile PIC';
}
}
if ($_FILES['resume']['error'] == UPLOAD_ERR_OK && $_FILES['resume']['type'] == ' application/msword') { // Проверяем на наличие ошибок
$destiation_dir = dirname(__FILE__) . '/' . $_FILES['resume']['name']; // Директория для размещения файла
if (move_uploaded_file($_FILES['resume']['tmp_name'], $destiation_dir)) { // Перемещаем файл в желаемую директорию
echo 'resume Uploaded'; // Оповещаем пользователя об успешной загрузке файла
} else {
echo 'resume not uploaded';
}
} else {
switch ($_FILES['resume']['error']) {
case UPLOAD_ERR_FORM_SIZE:
case UPLOAD_ERR_INI_SIZE:
echo 'resume Size exceed';
brake;
case UPLOAD_ERR_NO_FILE:
echo 'resume Not selected';
break;
default:
echo 'Something is wrong with resume';
}
}
}
?>
<html>
<head>
<title>Multiple File Upload</title>
</head>
<body>
<h1>Multiple File Upload</h1>
<form method="post" action="multiple.php" enctype="multipart/form-data">
<label for="profilepic">Profile Pic</label>
<input type="file" id="profilepic" name="profilepic"></br>
<label for="resume">Resume</label>
<input type="file" id="resume" name="resume"></br>
<input type="submit" value="Click To Upload">
</form>
</body>
</html>
