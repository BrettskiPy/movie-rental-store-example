<?php

use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '/../src/Customer.php');
require_once(__DIR__ . '/../src/Rental.php');

class CustomerTest extends TestCase
{
    public function testConstructor()
    {
        $customer = new Customer("John Doe");
        $this->assertEquals("John Doe", $customer->getName());
    }

    public function testAddAndGetRentals()
    {
        $customer = new Customer("Jane Doe");
        $rental = $this->createMock(Rental::class);
        $customer->addRental($rental);

        $this->assertCount(1, $customer->getRentals());
        $this->assertSame($rental, $customer->getRentals()[0]);
    }
}