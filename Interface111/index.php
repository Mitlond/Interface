<?php
require_once "resylt.php";
$obj = new pol();  /*создаем объект на базе класса*/
/* сложение*/
$obj->summa(2,3);
echo "<br/>";
echo $obj->showres();
/* умножение*/
$obj->umn(2,3);
echo "<br/>";
echo $obj->showres();
/* вычитание*/
$obj->minus(2,3);
echo "<br/>";
echo $obj->showres();
/* деление*/
$obj->delenie(6,3);
echo "<br/>";
echo $obj->showres()
?>