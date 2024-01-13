<?php

class Rental
{
    private $movie;
    private $daysRented;

    public function __construct(Movie $movie, int $daysRented)
    {
        if ($daysRented < 0) {
            throw new InvalidArgumentException("Days rented cannot be negative");
        }

        $this->movie = $movie;
        $this->daysRented = $daysRented;
    }

    public function getDaysRented(): int
    {
        return $this->daysRented;
    }

    public function getMovie(): Movie
    {
        return $this->movie;
    }

    public function getCharge(): float
    {
        $classificationClass = $this->movie->getClassification();
        return $classificationClass::calculateRentalCharge($this->daysRented);
    }

    public function getFrequentRenterPoints(): int
    {
        $classificationClass = $this->movie->getClassification();
        return $classificationClass::calculateFrequentRenterPoints($this->daysRented);
    }
}
