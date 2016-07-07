<?php
$text=$_POST['text'];

  // функция обратного вызова
  function zamena($matches) 
  {
    // как обычно: $matches[0] -  полное вхождение шаблона
    // $matches[1] - вхождение первой подмаски,
    // заключенной в круглые скобки, и так далее...
    return $matches[1].("ййй");
  };

  echo preg_replace_callback("/ст/i", "zamena",$text);

 echo "$text";
?>