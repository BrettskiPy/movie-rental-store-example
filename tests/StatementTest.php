<?php

use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '/../src/Statement.php');

class StatementTest extends TestCase
{
    public function testConstructor()
    {
        $statement = new Statement("John Doe");
        $this->assertEquals("John Doe", $statement->getCustomerName());
    }

    public function testAddRentalLineAndGetRentalLines()
    {
        $statement = new Statement("Jane Doe");
        $statement->addRentalLine("The Matrix", 4.0);

        $rentalLines = $statement->getRentalLines();
        $this->assertCount(1, $rentalLines);
        $this->assertEquals("The Matrix", $rentalLines[0]['title']);
        $this->assertEquals(4.0, $rentalLines[0]['amount']);
    }

    public function testSetTotalAmountAndGetTotalAmount()
    {
        $statement = new Statement("Alice");
        $statement->setTotalAmount(15.0);
        $this->assertEquals(15.0, $statement->getTotalAmount());
    }

    public function testSetFrequentRenterPointsAndGetFrequentRenterPoints()
    {
        $statement = new Statement("Bob");
        $statement->setFrequentRenterPoints(5);
        $this->assertEquals(5, $statement->getFrequentRenterPoints());
    }
}
