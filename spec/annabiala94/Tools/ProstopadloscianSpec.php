<?php

namespace spec\annabiala94\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProstopadloscianSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('annabiala94\Tools\Prostopadloscian');
    }
    
      function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(134)->getH()->shouldReturn(134);
    }
    
    function it_should_calculate_prostopadloscian()
    {
        $this->setA(3)->setB(2)->setH(2)->prostopadloscian()->shouldReturn(12);
    }
}
