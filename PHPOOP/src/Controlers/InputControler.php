<?php

namespace PHPOOP\Controlers;

use PHPOOP\Repository\InputRepository;

class InputControler
{

    public function __construct(private InputRepository $inputRepository)
    {
    }

    public function qty(): string
    {
        print_r ($this->inputRepository->getByQty('12345'));
        die;
    }

    public function price(): string
    {
        return 'price';
    }
}