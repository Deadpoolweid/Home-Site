<?php
$text=$_POST['text'];

  // ������� ��������� ������
  function zamena($matches) 
  {
    // ��� ������: $matches[0] -  ������ ��������� �������
    // $matches[1] - ��������� ������ ��������,
    // ����������� � ������� ������, � ��� �����...
    return $matches[1].("���");
  };

  echo preg_replace_callback("/��/i", "zamena",$text);

 echo "$text";
?>