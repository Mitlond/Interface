<?php
require_once 'Priboi.php';
class temple implements Priboi
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