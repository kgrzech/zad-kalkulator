<?php

namespace Mmajewski1313\Tools\Strings;

class Convert
{
    private $str;
   
    public function setStr($str)
    {
        $this->str = $str;
        return $this;
    }
    public function getStr()
    {
        return $this->str;
    }
    public function toLower()
    {
        return strtolower($this->str);
    }
    
    public function toUpper()
    {
        return strtoupper($this->str);
    }
    
    public function ucfirst()
    {
        return ucfirst($this->str);
    }
}
