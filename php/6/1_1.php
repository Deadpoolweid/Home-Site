<?
if (move_uploaded_file($_FILES['myfile']['tmp_name'],"download/".$_FILES['myfile'][name])){
echo "Файл ".$_FILES['myfile'][name]." успешно загружен в папку \"zag\"<br>";
} else {
echo "Произошла ошибка при загрузке файла.
Некоторая отладочная информация:<br>";
print_r($_FILES);
}
?>