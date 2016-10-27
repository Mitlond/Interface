<?php
require_once 'Test.php';
class temple implements Test
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
	function lim(){
	$this->zerro=0;
	
	}
};
?>