<?php
class Calculator
{
 
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

    public function division($a, $b)
    {
        return $a / $b;
    }
	
    public function espar($a)
    {
        if(($a%2)==0){
			return true;
		}
		return false;
    }
 
}
