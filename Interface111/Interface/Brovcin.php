<?php
interface Brovcin
{
    public function set($a,$b);
    public function Crazis();
}


class temple implements Brovcin
{
  public $zerro;
  
    public function set($a,$b)
    {
        $this->zerro = $a+$b;
    }
	public function Crazis () 
	{
        return $this->zerro;
    }
};

?>