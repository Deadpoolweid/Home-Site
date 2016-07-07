<?
echo '<br>Форма для загрузки файла на сервер';
echo '<br>
<form enctype="multipart/form-data" action="1_1.php" method="post">
<br><input type="hidden" name="MAX_FILES_SIZE" value="300000"/>
Загрузить файл: <input type="file" name="myfile" /><br>
<br><input type="submit" value="Отправить файл" />
</form>';

?>