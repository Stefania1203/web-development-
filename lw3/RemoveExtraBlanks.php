<?php
$text = $_GET['document']; /* сохранили параметр text из GET в переменной */
$word = explode(" ", $text);
$space = '';
foreach ($word as $w)   /* цикл происходит перебор значений в массиве word */
{
  header("Content-Type: text/plain");
  echo $space.$w;
  $space = ' ';
}
?>
