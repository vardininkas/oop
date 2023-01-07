<?php

namespace PHPOOP\Data;

class Input
{
    private int $qty;
    private int $price;
    private int $tariff;
    private string $month;

    public function setQty(string $qty): int
    {
        $this->qty = $qty;
        return $qty;
    }

    public function setPrice(string $price): int
    {
        $this->price = $price;
        return $price;
    }

    public function setTariff(string $tariff): void
    {
        $this->tariff = $tariff;
    }

    public function setMonth(int $month): string
    {
        $this->month = $month;
        return $month;
    }

    public function getQty(): int
    {
        return $this->qty;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getRate(): int
    {
        return $this->tariff;
    }

    public function getMonth(): string
    {
        return $this->month;
    }



}