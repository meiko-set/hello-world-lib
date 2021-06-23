<?php

namespace MeikoSet\HelloWorldLib;

class HelloWorldLib
{
    public function sayHallo() 
    {
        echo "Hey ".config('meikoset.dude', 'Failure :-(');
    }
}
