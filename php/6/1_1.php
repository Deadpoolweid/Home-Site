<?
if (move_uploaded_file($_FILES['myfile']['tmp_name'],"download/".$_FILES['myfile'][name])){
echo "���� ".$_FILES['myfile'][name]." ������� �������� � ����� \"zag\"<br>";
} else {
echo "��������� ������ ��� �������� �����.
��������� ���������� ����������:<br>";
print_r($_FILES);
}
?>