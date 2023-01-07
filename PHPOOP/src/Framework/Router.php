<?php

namespace PHPOOP\Framework;

use PHPOOP\Controlers\HomePageControler;
use PHPOOP\Controlers\InputControler;

class Router
{
    public function __construct(
        private HomePageControler $homePageControler,
        private InputControler $inputControler
    ){
    }

    public function process(string $route)
    {
        switch ($route) {
            case '/':
            echo $this->homePageControler->renderHomePage();
                break;
            case '/input/info':
                echo $this->inputControler->qty();
                break;
            case '/rez/info':
                echo $this->inputControler->price();
                break;
        }
    }
}
