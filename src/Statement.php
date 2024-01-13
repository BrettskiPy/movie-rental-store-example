<?php

class Statement
{
    private $customerName;
    private $totalAmount;
    private $frequentRenterPoints;
    private $rentalLines = [];

    public function __construct(string $customerName)
    {
        $this->customerName = $customerName;
    }

    public function addRentalLine(string $title, float $amount)
    {
        $this->rentalLines[] = ['title' => $title, 'amount' => $amount];
    }

    public function setTotalAmount(float $amount)
    {
        $this->totalAmount = $amount;
    }

    public function setFrequentRenterPoints(int $points)
    {
        $this->frequentRenterPoints = $points;
    }

    public function getCustomerName(): string
    {
        return $this->customerName;
    }

    public function getTotalAmount(): float
    {
        return $this->totalAmount;
    }

    public function getFrequentRenterPoints(): int
    {
        return $this->frequentRenterPoints;
    }

    public function getRentalLines(): array
    {
        return $this->rentalLines;
    }
}
