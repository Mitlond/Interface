<?php
interface resylt
{
    public function summa($one, $two);// ����� ���� �����
    public function umn($one, $two);// ��������� ���� �����
    public function minus($one, $two);// ��������� ���� �����
    public function delenie($one, $two);// ������� ���� �����
    public function showres();// ����� ����������
}
class pol implements resylt
{
    public $res;
    /* ��������*/
    public function summa($one, $two)
    {
        $this->res = $one+$two;
    }
    /* ���������*/
    public function umn($one, $two)
    {
        $this->res = $one*$two;
    }
    /* ���������*/
    public function minus($one, $two)
    {
        $this->res = $one-$two;
    }
    /* �������*/
    public function delenie($one, $two)
    {
        $this->res = $one/$two;
    }
/* ����� ����������*/
    public function showres()
    {
        return $this->res;
    }
}
?>