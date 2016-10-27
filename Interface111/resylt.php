<?php
interface resylt
{
    public function summa($one, $two);// сумма двух чисел
    public function umn($one, $two);// умножение двух чисел
    public function minus($one, $two);// вычитание двух чисел
    public function delenie($one, $two);// деление двух чисел
    public function showres();// вывод результата
}
class pol implements resylt
{
    public $res;
    /* сложение*/
    public function summa($one, $two)
    {
        $this->res = $one+$two;
    }
    /* умножение*/
    public function umn($one, $two)
    {
        $this->res = $one*$two;
    }
    /* вычитание*/
    public function minus($one, $two)
    {
        $this->res = $one-$two;
    }
    /* деление*/
    public function delenie($one, $two)
    {
        $this->res = $one/$two;
    }
/* вывод результата*/
    public function showres()
    {
        return $this->res;
    }
}
?>