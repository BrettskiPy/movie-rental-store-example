<?php

use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '/../src/Rental.php');
require_once(__DIR__ . '/../src/Movie.php');

class RentalTest extends TestCase
{
    public function testConstructor()
    {
        $movie = new Movie("The Matrix", NewRelease::class);
        $rental = new Rental($movie, 5);

        $this->assertSame($movie, $rental->getMovie());
        $this->assertEquals(5, $rental->getDaysRented());
    }

    public function testConstructorWithNegativeDaysRented()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Days rented cannot be negative");

        $movie = new Movie("Inception", NewRelease::class);
        new Rental($movie, -1);
    }

    public function testGetCharge()
    {
        $movie = new Movie("The Godfather", Regular::class);
        $rental = new Rental($movie, 3);

        $expectedCharge = Regular::calculateRentalCharge(3);
        $this->assertEquals($expectedCharge, $rental->getCharge());
    }

    public function testGetFrequentRenterPoints()
    {
        $movie = new Movie("Scream", Horror::class);
        $rental = new Rental($movie, 4);

        $expectedPoints = Horror::calculateFrequentRenterPoints(4);
        $this->assertEquals($expectedPoints, $rental->getFrequentRenterPoints());
    }
}
